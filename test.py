import requests
import webbrowser
import pandas as pd
from geopy.distance import geodesic
import pyproj

class GPSReceiver:
    def __init__(self):
        self.latitude = 0.0
        self.longitude = 0.0

    def update_coordinates(self, latitude, longitude):
        self.latitude = latitude
        self.longitude = longitude

def calculate_distance(coord1, coord2):
    return geodesic(coord1, coord2).meters


def calculate_waypoints(start_coord, end_coord, interval):
    waypoints = []
    total_distance = calculate_distance(start_coord, end_coord)
    
    num_interpolations = int(total_distance / interval)
    # print(num_interpolations)
    for i in range(num_interpolations + 1):
        ratio = i / num_interpolations
        lat = start_coord[0] + ratio * (end_coord[0] - start_coord[0])
        lon = start_coord[1] + ratio * (end_coord[1] - start_coord[1])
        waypoints.append((lat, lon))
    
    return waypoints

def main():
    bing_maps_key = 'Au2WudGNGXTaUTUkRyXiPXy0qubfhBPfBIYZc-X7k0mUsKLIgV9XDN6ZyrOb1OwX'

    gps_receiver = GPSReceiver()

    # Putting Vehicle's Initial Coordinates
    vehicle_latitude = 28.656519
    vehicle_longitude = 77.238468

    gps_receiver.update_coordinates(vehicle_latitude, vehicle_longitude)

    # destination_address = input("Enter the destination address: ")
    destination_address = "India Gate, Rajpath Road Area, New Delhi, Delhi 110001"

    # Converting destination address to coordinates using Bing Maps API
    geocode_url = f"https://dev.virtualearth.net/REST/v1/Locations"
    geocode_params = {
        "q": destination_address,
        "key": bing_maps_key
    }
    geocode_response = requests.get(geocode_url, params=geocode_params).json()

    if not geocode_response.get('resourceSets', []):
        print("Could not find coordinates for the provided address.")
        return

    coordinates = geocode_response['resourceSets'][0]['resources'][0]['point']['coordinates']
    destination_latitude = coordinates[0]
    destination_longitude = coordinates[1]

    # Getting directions from Bing Maps API
    route_url = f"https://dev.virtualearth.net/REST/V1/Routes/Driving"
    route_params = {
        "wayPoint.1": f"{gps_receiver.latitude},{gps_receiver.longitude}",
        "wayPoint.2": f"{destination_latitude},{destination_longitude}",
        "key": bing_maps_key
    }
    route_response = requests.get(route_url, params=route_params).json()

    if route_response.get('resourceSets', []):
        start_coord = (gps_receiver.latitude, gps_receiver.longitude)
        end_coord = (destination_latitude, destination_longitude)
        interpolated_waypoints = calculate_waypoints(start_coord, end_coord, interval = 50)

        print("Optimal Path with Waypoints:")
        for index, step in enumerate(route_response['resourceSets'][0]['resources'][0]['routeLegs'][0]['itineraryItems'], start=1):
            print(f"{index}. {step['instruction']['text']}")

        # Print x and y coordinates for each waypoint
        # print("\nWaypoint Coordinates:")
        # for i, waypoint in enumerate(interpolated_waypoints, start=1):
        #     x = waypoint[0]  # Latitude as x-coordinate
        #     y = waypoint[1]  # Longitude as y-coordinate
        #     print(f"Waypoint {i}: x = {x}, y = {y}")

        # Create a DataFrame to store waypoint coordinates
        waypoints_df = pd.DataFrame(columns=['Waypoint', 'Latitude', 'Longitude', 'x', 'y'])

        # Populate the DataFrame with waypoint coordinates
        initial_lat = interpolated_waypoints[0][0]
        initial_long = interpolated_waypoints[0][1]
        initial_x = 0.0
        initial_y = 0.0

        # Populate the DataFrame with waypoint coordinates
        for i, waypoint in enumerate(interpolated_waypoints, start=1):
            lat = waypoint[0]
            long = waypoint[1]

            if i != 1:
                source_proj = pyproj.Proj(proj='latlong', datum='WGS84')
                target_proj = pyproj.Proj(proj='utm', zone=33, datum='WGS84')
                y, x = pyproj.transform(source_proj, target_proj, long, lat)
                
                # Calculate x and y coordinates relative to the initial position
                initial_source_proj = pyproj.Proj(proj='latlong', datum='WGS84')
                initial_target_proj = pyproj.Proj(proj='utm', zone=33, datum='WGS84')
                initial_y, initial_x = pyproj.transform(initial_source_proj, initial_target_proj, initial_long, initial_lat)
                x -= initial_x
                y -= initial_y
            else:
                x = initial_x
                y = initial_y

            waypoints_df.loc[i] = [i, lat, long, x, y]  # x tends to latitude and y tends to longitude

        # Export the DataFrame to an Excel file
        waypoints_excel_file = 'D:\College Work\MTP\Code/waypoints.xlsx'
        waypoints_df.to_excel(waypoints_excel_file, index=False)
        print(f"Waypoint coordinates exported to '{waypoints_excel_file}'\n")

        # Generating and opening map URL
        waypoints_param = ";".join([f"{waypoint[0]},{waypoint[1]}" for waypoint in interpolated_waypoints])
        map_url = f"https://www.bing.com/maps/default.aspx?rtp=pos.{gps_receiver.latitude}_{gps_receiver.longitude}~pos.{waypoints_param}~pos.{destination_latitude}_{destination_longitude}&mode=D"
        webbrowser.open_new(map_url)
        # At the end of your Python script
        print("Distance:", calculate_distance(start_coord, end_coord), "meters")
        print("Waypoints:", interpolated_waypoints)
    else:
        print("Could not find directions for the provided route.\n")

if __name__ == "__main__":
    main()
