





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stdino</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS (No need to include it into your project) -->
	<link rel="stylesheet" href="css/demo.css">
  
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="container-fluid">
   <?php  require 'partials/_navbar.php'?>
   
 

    <div class="row pt-5 mainbodydiv d-flex justify-content-center">
       
        <form class="d-flex justify-content-center mb-5" role="search" action="/photostudio/studiosearch.php" method="post">
            <input class="me-2 searchbox" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="justify-content-center d-flex">
          <h1 class="tage_line">S<span class="stido">T</span>IDO</h1>
      </div>
      <div class="justify-content-center mt-3 mb-5 d-flex">
          <h1 class="tage_line">  WE CAPTURE BEST MOMENT OF YOUR LIFE</h1>
      </div>
       
      <div class="row p-3 " style="">
        <div> <h1>Catergory</h1></div>
        <div class="row d-flex justify-content-around pb-5"> 
          <div class="col-sm-2  p-3 mb-md-0 mb-3" style="background-color: #FFE5E5;border-radius: 10px;">Wedding  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: pink;border-radius: 10px;">Photo Shoot  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #A8DF8E;border-radius: 10px;">Engagement  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #F3FDE8;border-radius: 10px;">Event photography  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: orange;border-radius: 10px;">Fashion  <i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="row d-flex justify-content-around">
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #EBE76C;border-radius: 10px;">Trip  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: aqua;border-radius: 10px;">Toddler & childern  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #A1CCD1;border-radius: 10px;">Birthday party  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #A1CCD1;border-radius: 10px;">New year  <i class="fas fa-arrow-right"></i></div>
          <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #ED7B7B;border-radius: 10px;">Others  <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>


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
                src="photos/unknown-4-1534103992.jpeg"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title">Destination Wedding</h5>
                <p class="card-text">
                Capture the magic of your destination wedding with our expert photo studio.
                </p>
                <a href="#!" class="btn btn-primary">View more</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="photos/Beach-wedding-in-chennai.jpeg"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Indain traditional Wedding</h5>
                <p class="card-text">
                Experience the grandeur  of Indian weddings through our traditional photography services.
                </p>
                <a href="#!" class="btn btn-primary">View more</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="photos/spfc1.jpg"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Professional Photoshoot</h5>
                <p class="card-text">
                Capture timeless moments with our professional photo studio. 
                </p>
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

    <div class="row">
      <div class="pb-3"> <h1>Popular Location In India</h1></div>
      <div class="row d-md-flex justify-content-around pb-5"> 
        <div class="col-sm-2  p-3 mb-md-0 mb-3" style="background-color: #FFE5E5;border-radius: 10px;">Delhi  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: pink;border-radius: 10px;">Mumbai  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #A8DF8E;border-radius: 10px;">Chennai  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #F3FDE8;border-radius: 10px;">Hyderabad  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: orange;border-radius: 10px;">Pune  <i class="fas fa-arrow-right"></i></div>
      </div>
      <div class="row d-flex justify-content-around pb-5">
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #EBE76C;border-radius: 10px;">Jaipur  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: aqua;border-radius: 10px;">Kanpur  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #A1CCD1;border-radius: 10px;">Patna  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #A1CCD1;border-radius: 10px;">Simla  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #ED7B7B;border-radius: 10px;">Indore  <i class="fas fa-arrow-right"></i></div>
      </div>
      <div class="row d-md-flex justify-content-around pb-5"> 
        <div class="col-sm-2  p-3 mb-md-0 mb-3" style="background-color: #D5FFD0;border-radius: 10px;">Chandighar  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #898121;border-radius: 10px;">Goa  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #FFC95F;border-radius: 10px;">Banglore  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #F5F5F5;border-radius: 10px;">Lucknow  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #FAF4B7;border-radius: 10px;">Kolkata  <i class="fas fa-arrow-right"></i></div>
      </div>
      <div class="row d-flex justify-content-around pb-5">
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #9BCDD2;border-radius: 10px;">Jodhpur  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #22A699;border-radius: 10px;">Bhubaneswar  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #ED7B7B;border-radius: 10px;">Jammu and kashmir  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #A1CCD1;border-radius: 10px;">Manali  <i class="fas fa-arrow-right"></i></div>
        <div class="col-sm-2  p-3 mb-md-0 mb-3"style="background-color: #E8FFCE;border-radius: 10px;">Others  <i class="fas fa-arrow-right"></i></div>
      </div>
    </div>    
    
    <div class="container">
      <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
          <h4 class="font-cond-l fg-accent lts-md mgb-10" contenteditable="false">Not Yet Convinced?</h4>
          <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">Read Customer Reviews</h1>
      </div>
      <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm">
          <li>
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
            <p class="fs-110 font-cond-l" contenteditable="false">" Stido Photo Studio offers top-notch photography services. Their website is user-friendly, making it easy to book sessions and explore their portfolio. "</p>
            <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Rahul</h5>
            <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business men - delhi</small>
          </li>
          <li>
            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
            <p class="fs-110 font-cond-l" contenteditable="false">" I love Stido's website design! It's visually appealing and showcases their photography skills beautifully. Booking a session was a breeze. "</p>
            <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sonu yadav</h5>
            <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Recording Artist - delhi</small>
          </li>
          <li>
            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
            <p class="fs-110 font-cond-l" contenteditable="false">"Stido's website is a one-stop destination for photography enthusiasts. It's informative, and their portfolio convinced me to schedule a shoot. Great experience! "</p>
            <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Roy sharma</h5>
            <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Fund Manager - delhi</small>
          </li>
        </ul>
  </div>
  </div>
  <?php  require 'partials/_footer.php'?>
  <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->
 

<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">
          Your Shopping Cart
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-image">
          <thead>
            <tr>
             
              <th scope="col">Studio Name</th>
              <th scope="col">Category of booking</th>
              <th scope="col">Photography Style</th>
              <th scope="col">Select Album Type</th>
              <th scope="col">Photographers</th>
              <th scope="col">Coverage Hours</th>
              <th scope="col">Number of Sheets</th>
              <th scope="col">Number of Days</th>
              <th scope="col">Starting date</th>
              <th scope="col">Prices</th>
            </tr>
          </thead>
          <tbody>
    
            <tr>
              <td>Raj Photo Studio</td>
              <td>Wedding</td>
              <td>Traditional</td>
              <td >Classic Photo Album</td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="2"></td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="2"></td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="2"></td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="2"></td>
              <td class="qty"><input type="date" class="form-control" id="input1" value="10-12-2023"></td>
              <td>5000$</td>
            </tr>
           
          </tbody>
          <a href="#" class="btn btn-danger btn-sm">
                  <i class="fa fa-times"></i>
                </a>
        </table> 
        <div class="d-flex justify-content-end">
          <h5>Total: <span class="price text-success">5000$</span></h5>
        </div>
      </div>
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="final order page.php" class="btn btn-success">Buy Now</a>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
   
     <!-- END EDMO HTML (Happy Coding!)-->
 </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script  src="./js/script.js"></script> 
  </body>
</html>