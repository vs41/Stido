<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stdino</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Add margin to the card class to create a gap between cards */
        .card-with-margin {
            margin: 10px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body class="container-fluid">
   <?php require 'partials/_navbar.php'?>
   
   <div class="row pt-5 mainbodydiv d-flex justify-content-center">
        <div class="row pt-4"   style="">
        <form class="form-inline d-flex justify-content-center" method="GET">
                            <div class="form-group mx-2">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" id="search" name="search" placeholder="Search by Studio Name">
                            </div>
                           
                            <div class="form-group mx-2">
                                <label for="StudioCity" class="sr-only">Search</label>
                                <input type="text" class="form-control" id="search" name="StudioCity" placeholder="Search by city name">
                            </div>
                            <div class="form-group mx-2">
                                <label for="rating" class="sr-only">Rating</label>
                                <select class="form-control" id="rating" name="rating">
                                    <option value="" selected>Filter by Rating</option>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
        </form>
       




        </div>
       
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "photostudio_db";

        $con = mysqli_connect($server, $username, $password, $database);
        if (!$con) {
            echo "Oops, there was an error in the connection.";
        }

        $filter = array();

        if (isset($_GET['StudioCity'])) {
            $StudioCity = $_GET['StudioCity'];
            $filter[] = "StudioCity LIKE '%$StudioCity%'";
        }

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $filter[] = "StudioName LIKE '%$search%'";
        }

        if (isset($_GET['rating']) && $_GET['rating'] !== "") {
            $rating = $_GET['rating'];
            $filter[] = "StudioRating = $rating";
        }

        $whereClause = "";
        if (!empty($filter)) {
            $whereClause = "WHERE " . implode(" AND ", $filter);
        }

        $sql = "SELECT * FROM photostudioname $whereClause";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 card-with-margin">
                    <div class="card-img-container">
                        <img class="card-img-top"  style="height:200px" src="<?php echo $row['StudioImages'] ?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['StudioName'] ?></h5>
                        <p class="card-text"><?php echo $row['StudioRating']?> <i class="fa-solid fa-star text-warning"></i></p>
                        <p class="card-text"><?php echo $row['StudioAddress'] ?></p>
                        <p class="card-text"><?php echo $row['StudioCity'] ?></p>
                        <?php $x=$row['stid'] ?>

                        <a href="singlephotostudio.php?id=<?= $x ?>" class="btn btn-primary">Place Order</a>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <?php require 'partials/_footer.php'?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm
