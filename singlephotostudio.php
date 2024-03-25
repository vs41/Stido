<?php
    $useLocation="Narayan Singh Circle";
    $studioLocation; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stdino</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://www.bing.com/api/maps/mapcontrol?callback=loadMapScenario" async defer></script>
    <style>

                    input[type=text], input[type=password],input[type=email],input[type=submit]{
                        width: 100%;
                        margin: 10px 0;
                        border-radius: 5px;
                        padding: 15px 18px;
                        box-sizing: border-box;
                    }
    </style>    
</head>
<body class="container-fluid">
   <?php  require 'partials/_navbar.php'?>

    <div class="row pt-4 mainbodydiv d-flex justify-content-center">
     <div class="row p-4 justify-content-around" >            
        <div class="card col-8 pd-4 " style="background-color:#FAF2D3">
         <div class="row no-gutters">
        <?php  
                  
                    require 'partials/_connect_db.php';
                
                    $sql = "SELECT * FROM photostudioname WHERE stid='" . $_GET['id'] . "'";

                    $result = mysqli_query($con, $sql);
                
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $studioLocation=$row['StudioAddress'];

        ?>    
        <div class="col-sm-5">
            <img class="card-img" src="<?php echo $row['StudioImages'] ?>" alt="Suresh Dasari Card">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                    <h5 class="card-title"><?php echo $row['StudioName'] ?></h5>
                    <p class="card-text"><?php echo $row['StudioRating']?> <i class="fa-solid fa-star text-warning"></i></p>
                    <p class="card-text"><?php echo $row['StudioAddress'] ?></p>
                    <p class="card-text"><?php echo $row['StudioCity'] ?></p>
                <Button  class="btn btn-primary">Place Order</button>
                
            </div>
        </div>
        <?php
                        }
                    }
        ?>
    </div>
</div>
</div>
      <hr>     
    <div class="d-flex justify-content-center" >
                        <ul class="list-inline" style="font-size:20px">
                            <li class="list-inline-item btn"><a href="" class="text-decoration-none text-reset" onclick="getPage(4);return false;">Place Order</a></li>
                            <li class="list-inline-item btn"><a href="" class="text-decoration-none text-reset" onclick="getPage(2);return false;">Past Work Photos</a></li>
                            <li class="list-inline-item btn"><a href="" class="text-decoration-none text-reset" onclick="getPage(3);return false;">Our team</a></li>
                            <li class="list-inline-item btn"><a href="" class="text-decoration-none text-reset" onclick="getPage(1);return false;">Reviews</a></li>
                        </ul>
            </div>
            <hr>
            
       
  <div id="div2" style="display:block"> 
    <div class="row"   >
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                    src="photos/psphotos/compressed.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                    />

                    <img
                    src="photos/psphotos/images.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Wintry Mountain Landscape"
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                    src="photos/psphotos/pexels-anna-shvets-3746149.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Mountains in the Clouds"
                    />

                    <img
                    src="photos/psphotos/pexels-brett-sayles-2388569.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                    src="photos/psphotos/muslim-pakistani-wedding-photography-nikkah-reception-dallas-20.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Waves at Sea"
                    />

                    <img
                    src="photos/psphotos/istockphoto-1190043570-170667a.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park"
                    />
                </div>
           </div>

        </div>
          
           <div id="div3" style="display:none">
                                                               <!-- Carousel wrapper -->
                                                    <div
                                                    id="carouselMultiItemExample"
                                                    class="carousel slide carousel-dark text-center"
                                                    data-mdb-ride="carousel"
                                                    >
                                                    <!-- Controls -->
                                                    <div class="d-flex justify-content-center mb-4">
                                                        <button
                                                        class="carousel-control-prev position-relative"
                                                        type="button"
                                                        data-mdb-target="#carouselMultiItemExample"
                                                        data-mdb-slide="prev"
                                                        >
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                        </button>
                                                        <button
                                                        class="carousel-control-next position-relative"
                                                        type="button"
                                                        data-mdb-target="#carouselMultiItemExample"
                                                        data-mdb-slide="next"
                                                        >
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                        </button>
                                                    </div>
                                                    <!-- Inner -->
                                                    <div class="carousel-inner py-4">
                                                        <!-- Single item -->
                                                        <div class="carousel-item active">
                                                        <div class="container">
                                                            <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/photographer/phtographer1.jpg"
                                                                    class="card-img-top"
                                                                    alt="Waterfall"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Rahul sharma</h5>
                                                                   
                                                                    <a href="#!" class="btn btn-primary">View more</a>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 d-none d-lg-block">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/photographer/photographer3.jpg"
                                                                    class="card-img-top"
                                                                    alt="Sunset Over the Sea"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Mohit</h5>
                                                                   
                                                                    <a href="#!" class="btn btn-primary">View more</a>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 d-none d-lg-block">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/photographer/photographer3.jpg"
                                                                    class="card-img-top"
                                                                    alt="Sunset over the Sea"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Roy</h5>
                                                                    
                                                                    <a href="#!" class="btn btn-primary">View more</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <!-- Single item -->
                                                        <div class="carousel-item">
                                                        <div class="container">
                                                            <div class="row">
                                                            <div class="col-lg-4 col-md-12">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/Rhea-Aakash-Udaipur-Udaivilas-Destination-Wedding-22.jpg"
                                                                    class="card-img-top"
                                                                    alt="Fissure in Sandstone"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">
                                                                    Some quick example text to build on the card title and make up the bulk
                                                                    of the card's content.
                                                                    </p>
                                                                    <a href="#!" class="btn btn-primary">Button</a>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 d-none d-lg-block">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/spfc1.jpg"
                                                                    class="card-img-top"
                                                                    alt="Storm Clouds"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">
                                                                    Some quick example text to build on the card title and make up the bulk
                                                                    of the card's content.
                                                                    </p>
                                                                    <a href="#!" class="btn btn-primary">Button</a>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 d-none d-lg-block">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/unknown-4-1534103992.jpeg"
                                                                    class="card-img-top"
                                                                    alt="Hot Air Balloons"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">
                                                                    Some quick example text to build on the card title and make up the bulk
                                                                    of the card's content.
                                                                    </p>
                                                                    <a href="#!" class="btn btn-primary">Button</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <!-- Single item -->
                                                        <div class="carousel-item">
                                                        <div class="container">
                                                            <div class="row">
                                                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/Vows-and-Tales.jpg"
                                                                    class="card-img-top"
                                                                    alt="Peaks Against the Starry Sky"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">
                                                                    Some quick example text to build on the card title and make up the bulk
                                                                    of the card's content.
                                                                    </p>
                                                                    <a href="#!" class="btn btn-primary">Button</a>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/Alibaug-is-famous-for-its-themed-destination-weddings.jpg"
                                                                    class="card-img-top"
                                                                    alt="Bridge Over Water"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">
                                                                    Some quick example text to build on the card title and make up the bulk
                                                                    of the card's content.
                                                                    </p>
                                                                    <a href="#!" class="btn btn-primary">Button</a>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                                                <div class="card">
                                                                <img
                                                                    src="photos/Rhea-Aakash-Udaipur-Udaivilas-Destination-Wedding-22.jpg"
                                                                    class="card-img-top"
                                                                    alt="Purbeck Heritage Coast"
                                                                />
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">
                                                                    Some quick example text to build on the card title and make up the bulk
                                                                    of the card's content.
                                                                    </p>
                                                                    <a href="#!" class="btn btn-primary">Button</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <!-- Inner -->
                                                    </div>
                                                    <!-- Carousel wrapper -->

    
          </div>
                                                
                                                          
           <div id="div1" style="display:none" >
                                


                             
                                <div class="row p-4 justify-content-center">
                                            <div class=" col-6 ">
                                                <h2>Review this studio</h2>
                                                <form action="/photostudio/addR.php" method="post">
                                                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                                                    <!-- Other form elements here -->
                                                                    <input type="submit" value="Write review">
                                                 </form> 
                                            </div>
                                </div>







                                <div class="row p-4 justify-content-around" >            
                                    <div class="card col-8 pd-4 " style="background-color:#FAF2D3">
                                                <div class="row no-gutters p-5">
                                                        <div class="col-sm-3">
                                                            <img class="card-img" src="photos/userProfilePhoto/user image.jpg" alt="Suresh Dasari Card" style="border-radius:50%; width:100px;height:100px">
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="card-body">
                                                            <?php  
                                                                                                require 'partials/_connect_db.php';

                                                                                                $sqlp = "SELECT * FROM photostudioname WHERE stid='" . $_GET['id'] . "'";
                                                                                                $resultp = mysqli_query($con, $sqlp);

                                                                                                if ($resultp && mysqli_num_rows($resultp) > 0) {
                                                                                                    $rowp = mysqli_fetch_assoc($resultp);
                                                                                                    $sttname = $rowp['StudioName'];

                                                                                                    $sql = "SELECT * FROM ratingofstudio WHERE StudioName='" . $sttname . "'";
                                                                                                    $result = mysqli_query($con, $sql);

                                                                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                                ?>
                                                                                                        <!-- Your HTML output for each row of data goes here -->
                                                                                                        <h1 class="card-title"><?php echo $row['userName']; ?></h1>
                                                                                                        <p class="card-text"><?php echo $row['studioRating']; ?> <i class="fa-solid fa-star text-warning"></i></p>
                                                                                                        <p class="card-text"><?php echo $row['userAddress']; ?></p>
                                                                                                        <p class="card-text"><?php echo $row['userCity']; ?></p>
                                                                                                        <p class="card-text"><?php echo $row['Review']; ?></p>
                                                                                                       <?php if($row['HelpFull']>0){
                                                                                                        echo  '<p class="card-text">'; echo $row['HelpFull'];echo ' People found this helpful </p>';

                                                                                                       }?>
                                                                                                       <form action="/photostudio/Helpful.php" method="post">
                                                                                                                    <input type="hidden" name="hid" value="<?php echo $row['rid']; ?>">
                                                                                                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                                                                                                    <!-- Other form elements here -->
                                                                                                                    <input type="submit" value="Helpful">
                                                                                                        </form> 
                                                                                                <?php
                                                                                                        }
                                                                                                    }
                                                                                                }else{
                                                                                                    echo "Be the first reviewer";
                                                                                                }
                                                                                                ?>

                                        
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>   
                                          

                                    </div> 
                    <div  id="div4" class=" justify-content-center" style="display:none">

                                                                                                 <div class="row p-4 justify-content-around" >            
                                                                                                    <div class="card col-10 pd-4 " style="background-color:#FAF2D3">
                                                                                                    <div class="row no-gutters">
                                                                                                       
                                                                                                    <div class="col-sm-7">
                                                                                                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                                                                                                <div class="carousel-indicators">
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                                                                                                </div>
                                                                                                                <div class="carousel-inner">
                                                                                                                    <div class="carousel-item active">
                                                                                                                    <img src="photos/category/image6.jpeg" style="height:550px;width:100%" class="d-block w-100" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>First slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the first slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image2.jpg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Classic Photo alnum</h5>
                                                                                                                        <p>A classic photo album, where cherished memories come to life on every page.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image5.jpg" style="height:550px;width:100%" class="d-block w-100" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Mehndi function</h5>
                                                                                                                        <p>The mehndi function in a wedding, a celebration of love and artistry, where intricate henna designs adorn hands, symbolizing beauty and new beginnings.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image3.jpeg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Second slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the second slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image4.jpg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Second slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the second slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image1.jpg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Second slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the second slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                                                    <span class="visually-hidden">Previous</span>
                                                                                                                </button>
                                                                                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                                                    <span class="visually-hidden">Next</span>
                                                                                                                </button>
                                                                                                                </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-5">
                                                                                                        <div class="card-body">
                                                                                                                <h5 class="card-title">Wedding</h5>
                                                                                                            <form > 
                                                                                                            <div class="form-group">
                                                                                                                            <label for="style">Photography Style:</label>
                                                                                                                            <select class="form-control" id="style">
                                                                                                                                <option>Traditional</option>
                                                                                                                                <option>Candid</option>
                                                                                                                                <option>Artistic</option>
                                                                                                                            </select>
                                                                                                                        </div> 

                                                                                                                        <div class="form-group">
                                                                                                                <label for="album-type">Select Album Type:</label>
                                                                                                                <select class="form-control" id="album-type">
                                                                                                                    <option data-price="200">Classic Photo Album</option>
                                                                                                                    <option data-price="300">Modern Flush Mount Album</option>
                                                                                                                    <option data-price="250">Vintage Scrapbook Album</option>
                                                                                                                    <option data-price="400">Luxury Layflat Album</option>
                                                                                                                    <!-- Add more custom album types here -->
                                                                                                                </select>
                                                                                                            </div>   
                                                                                                            <div class="form-group">
                                                                                                                <label for="hours">Coverage Hours:</label>
                                                                                                                <input type="number" class= "form-control" id="hours">
                                                                                                            </div> 
                                                                                                            
                                                                                                            <div class="form-group">
                                                                                                                <label for="photographers">Number of Photographers:</label>
                                                                                                                <input type="number" class="form-control" id="photographers">
                                                                                                            </div >
                                                                                                            <div class="form-group" id="ending-date-group" style="display: none;">
                                                                                                                    <label for="starting-date">Starting Date:</label>
                                                                                                                    <input type="text" class="form-control datepicker" id="starting-date" placeholder="Choose an starting date">
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <label for="number-of-sheets">Number of Sheets:</label>
                                                                                                                    <input type="number" class="form-control" id="number-of-sheets" value="140" min="1">
                                                                                                                </div>

                                                                                                            <div class="form-group">
                                                                                                                    <label for="number-of-days">Number of Days:</label>
                                                                                                                    <input type="number" class="form-control" id="number-of-days" min="1">
                                                                                                                </div>
                                                                                                               
                                                                                                                <div class="form-group" id="ending-date-group" style="display: none;">
                                                                                                                    <label for="ending-date">Ending Date:</label>
                                                                                                                    <input type="text" class="form-control datepicker" id="ending-date" placeholder="Choose an ending date">
                                                                                                                </div>
                                                                                                                <div class="form-group" style="display:none">
                                                                                                                    <label for="money">Total Cost (<i class="fas fa-rupee-sign"></i>):</label>
                                                                                                                    <input type="text" class="form-control" id="total-cost" readonly>
                                                                                                                </div>
                                                                                                                <p id="prices2 p-2" style="font-size:25px;">0$</i></p>
                                                                                                                  <Button  class="btn btn-primary form-control mt-2">Add to cart</button>

                                                                                                            </form>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                   
                                                                                                </div>
                                                                                    </div>
                                                                                    </div>


                                                                                    <div class="row p-4 justify-content-around" >            
                                                                                                    <div class="card col-10 pd-4 " style="background-color:#FAF2D3">
                                                                                                    <div class="row no-gutters">
                                                                                                       
                                                                                                    <div class="col-sm-7">
                                                                                                    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel1">
                                                                                                                <div class="carousel-indicators">
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="6" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="7" aria-label="Slide 2"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="8" aria-label="Slide 3"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="9" aria-label="Slide 4"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="10" aria-label="Slide 5"></button>
                                                                                                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="11" aria-label="Slide 6"></button>
                                                                                                                </div>
                                                                                                                <div class="carousel-inner">
                                                                                                                    <div class="carousel-item active">
                                                                                                                    <img src="photos/category/image6.jpeg" style="height:550px;width:100%" class="d-block w-100" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>First slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the first slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image2.jpg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Second slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the second slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image5.jpg" style="height:550px;width:100%" class="d-block w-100" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Mehndi function</h5>
                                                                                                                        <p>The mehndi function in a wedding, a celebration of love and artistry, where intricate henna designs adorn hands, symbolizing beauty and new beginnings.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image3.jpeg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Second slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the second slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image4.jpg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Second slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the second slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div class="carousel-item">
                                                                                                                    <img src="photos/category/image1.jpg" class="d-block w-100" style="height:550px;width:100%" alt="...">
                                                                                                                    <div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Second slide label</h5>
                                                                                                                        <p>Some representative placeholder content for the second slide.</p>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                                                    <span class="visually-hidden">Previous</span>
                                                                                                                </button>
                                                                                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                                                    <span class="visually-hidden">Next</span>
                                                                                                                </button>
                                                                                                                </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-5">
                                                                                                        <div class="card-body">
                                                                                                                <h5 class="card-title">Shoots for Artists \ Celebrities</h5>
                                                                                                            <form > 
                                                                                                            <div class="form-group">
                                                                                                                            <label for="style">Photography Style:</label>
                                                                                                                            <select class="form-control" id="style">
                                                                                                                                <option>Traditional</option>
                                                                                                                                <option>Candid</option>
                                                                                                                                <option>Artistic</option>
                                                                                                                            </select>
                                                                                                                        </div> 

                                                                                                                        <div class="form-group">
                                                                                                                <label for="album-type">Select Album Type:</label>
                                                                                                                <select class="form-control" id="album-type">
                                                                                                                    <option data-price="200">Classic Photo Album</option>
                                                                                                                    <option data-price="300">Modern Flush Mount Album</option>
                                                                                                                    <option data-price="250">Vintage Scrapbook Album</option>
                                                                                                                    <option data-price="400">Luxury Layflat Album</option>
                                                                                                                    <!-- Add more custom album types here -->
                                                                                                                </select>
                                                                                                            </div>   
                                                                                                            <div class="form-group">
                                                                                                                <label for="hours">Coverage Hours:</label>
                                                                                                                <input type="number" class= "form-control" id="hours">
                                                                                                            </div> 
                                                                                                            
                                                                                                            <div class="form-group">
                                                                                                                <label for="photographers">Number of Photographers:</label>
                                                                                                                <input type="number" class="form-control" id="photographers">
                                                                                                            </div >
                                                                                                            <div class="form-group" id="ending-date-group" style="display: none;">
                                                                                                                    <label for="starting-date">Starting Date:</label>
                                                                                                                    <input type="text" class="form-control datepicker" id="starting-date" placeholder="Choose an starting date">
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <label for="number-of-sheets">Number of Sheets:</label>
                                                                                                                    <input type="number" class="form-control" id="number-of-sheets" value="140" min="1">
                                                                                                                </div>

                                                                                                            <div class="form-group">
                                                                                                                    <label for="number-of-days">Number of Days:</label>
                                                                                                                    <input type="number" class="form-control" id="number-of-days" min="1">
                                                                                                                </div>
                                                                                                               
                                                                                                                <div class="form-group" id="ending-date-group" style="display: none;">
                                                                                                                    <label for="ending-date">Ending Date:</label>
                                                                                                                    <input type="text" class="form-control datepicker" id="ending-date" placeholder="Choose an ending date">
                                                                                                                </div>
                                                                                                                <div class="form-group" style="display:none">
                                                                                                                    <label for="money">Total Cost (<i class="fas fa-rupee-sign"></i>):</label>
                                                                                                                    <input type="text" class="form-control" id="total-cost" readonly>
                                                                                                                </div>
                                                                                                                <p id="prices2 p-2" style="font-size:25px;">5000 <i class="fas fa-rupee-sign"></i></p>
                                                                                                                  <Button  class="btn btn-primary form-control mt-2">Add to cart</button>

                                                                                                            </form>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                   
                                                                                                </div>
                                                                                    </div>
                                                                                    </div>



                                    </div> 

</div>

<?php  require 'partials/_footer.php'?>

<script>
           function getPage(divNumber) {
            // Loop through all divs and hide them
            for (var i = 1; i <= 4; i++) {
                var div = document.getElementById('div' + i);
                if (div) {
                    div.style.display = 'none';
                }
            }

            // Show the specified div
            var selectedDiv = document.getElementById('div' + divNumber);
            if (selectedDiv) {
                selectedDiv.style.display = 'block';
            }
        }
      </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Add Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Add Slick Carousel JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });

            // Show/hide ending date field based on the number of days
            $('#number-of-days').on('input', function() {
                if (parseInt($(this).val()) > 1) {
                    $('#ending-date-group').show();
                } else {
                    $('#ending-date-group').hide();
                }
                updateTotalCost();
            });

            // Initialize the Slick Carousel for album images
            $('.album-slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
            });

            // Update album images when album type changes
            $('input[name="album-type"]').on('change', function() {
                const imageSrc = $(this).data('image');
                $('.album-slider').slick('slickRemove', null, null, true);
                $('.album-slider').slick('slickAdd', `<img src="${imageSrc}" class="album-image" alt="Album Image">`);
            });

            // Update total cost when inputs change
            $('#style, #photographers, #hours, #album-type').on('change', function() {
                updateTotalCost();
            });

            // Update total cost function
            function updateTotalCost() {
                const stylePrice = parseInt($('#style').val()) || 0;
                const photographerPrice = parseInt($('#photographers').val()) || 0;
                const hoursPrice = parseInt($('#hours').val()) || 0;
                const albumTypePrice = parseInt($('#album-type option:selected').data('price')) || 0;
                const numberOfDays = parseInt($('#number-of-days').val()) || 1;

                const totalCost = stylePrice + photographerPrice + (hoursPrice * numberOfDays) + albumTypePrice;
                $('#total-cost').val(totalCost);
            }
        });
    </script>
</body>
</html>