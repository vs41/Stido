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
    <style>
    /* Style for the "Order details" section */
    .formdiv {
        background-color: #f8f8f8;
        border-radius: 10px;
    }

    h2 {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    hr {
        border: 1px solid #000;
    }

    /* Style for form labels and inputs */
    .form-group label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 0.375rem 0.75rem;
        margin-top: 5px;
    }

    /* Style for the "Add new address" button */
    #add-address {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }

    #add-address:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Style for radio buttons and labels */
    input[type="radio"] {
        margin-right: 5px;
    }

    /* Style for the "Proceed for Payment" button */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Additional styling for better alignment and spacing */
    .col-6 {
        padding: 20px;
    }

    .col-6 .form-group {
        margin-bottom: 15px;
    }

    .col-6 p {
        margin-top: 15px;
        font-size: 24px;
    }
</style>
</head>
<body class="container-fluid">
   <?php  require 'partials/_navbar.php'?>
   
 

    <div class="row pt-5 mainbodydiv d-flex justify-content-center">
        <div class="col-10 m-3 p-3 formdiv"  style="border:6px solid black">
             <div class="row">
                <div class="row justify-content-center"><h2 class="text-center">Order details</h2></div>
                <hr>
                <form >
                <div class="row">
                    <div class="col-6" style="border-right:5px solid black">
                    <div class="form-group">
                                    <label for="number-of-sheets">Category:</label>
                                    <input type="text" class="form-control" id="number-of-sheets" value="Wedding" min="1">
                                </div>
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
                            <div class="form-group" id="ending-date-group" >
                                    <label for="starting-date">Starting Date:</label>
                                    <input type="date" class="form-control datepicker" id="starting-date" placeholder="Choose an starting date">
                                </div>
                                

                            <div class="form-group">
                                    <label for="number-of-days">Number of Days:</label>
                                    <input type="number" class="form-control" id="number-of-days" min="1">
                                </div>
                                
                                <div class="form-group" id="ending-date-group" style="display: none;">
                                    <label for="ending-date">Ending Date:</label>
                                    <input type="text" class="form-control datepicker" id="ending-date" placeholder="Choose an ending date">
                                </div>
                                <div class="form-group">
                                    <label for="number-of-sheets">Number of Sheets:</label>
                                    <input type="number" class="form-control" id="number-of-sheets" value="140" min="1">
                                </div>
                                <div class="form-group" style="display:none">
                                    <label for="money">Total Cost (<i class="fas fa-rupee-sign"></i>):</label>
                                    <input type="text" class="form-control" id="total-cost" readonly>
                                </div>


                            
                    </div>
                    
                    <div class="col-6 p-2">
                           <div class="row" >
                               <div class="col-10">
                                        <div class="form-group">
                                            <h2 class="text-center">Select The Address</h2>
                                            <label for="address">Select Address:</label>
                                            <div>
                                                <input type="radio" id="adda" name="fav_language" value="HTML">
                                                <label for="html">Dayal Nagar Gopal Pura Mode, Jaipur, Rajasthan</label><br>
                                            </div>
                                            <div id="addnewadd" style="display:none">
                                                <input type="text" class="form-control" id="new-address" name="new-address">
                                            </div>
                                            <button type="button" class="btn btn-primary m-2" id="add-address">Add new address</button>
                                        </div>
                               </div>
                           </div> 
                          
                           <hr>
                           <div class="row"> 
                              <div class="col-10"> 
                                       <h2 class="text-center ">Select Payment Method</h2> 
                                        <input type="radio" id="html" name="fav_language" value="HTML">
                                        <label for="html">Debit card</label><br>
                                        <input type="radio" id="css" name="fav_language" value="CSS">
                                        <label for="css">Credit card</label><br>
                                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                        <label for="javascript">Upi</label><br>
                                        <input type="radio" id="Netbanking" name="fav_language" value="JavaScript">
                                        <label for="Netbanking">Net banking</label>
                             </div>            
                          </div>
                          <hr>
                          <div class="row"> 
                              <div class="col-10"> 
                                       <h2 class="text-center ">Studio details</h2> 
                                       <p style="font-size:20px">Studio Name: Raj Photo Studio </p>
                                       <p style="font-size:20px">Studio Address: 192/351, near NRI Circle, Sector 19, Pratap Nagar, Jaipur, Rajasthan 303906</p>
                                       
                             </div>            
                          </div>
                         
                    </div>
                    <p id="prices2 p-2" style="font-size:25px;">Total 5000 $</i></p>
                                    <Button  class="btn btn-primary form-control mt-2">Proceed for Payment</button>
                    </form>
                </div>
             </div>
        </div> 
      
  </div>
  <?php  require 'partials/_footer.php'?>
  <script>
        document.addEventListener("DOMContentLoaded", function () {
            // When the "Add new address" button is clicked
            document.getElementById("add-address").addEventListener("click", function () {
                // Check if the input box is already displayed
                if (document.getElementById("addnewadd").style.display === "block") {
                    // Get the new address from the input box
                    const newAddress = document.getElementById("new-address").value;

                    if (newAddress) {
                        // Create a new radio input with the new address
                        const newRadio = document.createElement("input");
                        newRadio.type = "radio";
                        newRadio.name = "fav_language";
                        newRadio.value = "HTML";

                        // Create a new label for the radio input
                        const newLabel = document.createElement("label");
                        newLabel.htmlFor = "html";
                        newLabel.textContent = newAddress;

                        // Append the new radio input and label to the existing address container
                        document.getElementById("adda").parentNode.appendChild(newRadio);
                        document.getElementById("adda").parentNode.appendChild(newLabel);

                        // Hide the input box
                        document.getElementById("addnewadd").style.display = "none";
                        document.getElementById("new-address").value = "";
                    }
                } else {
                    // If the input box is not displayed, show it
                    document.getElementById("addnewadd").style.display = "block";
                }
            });
        });
    </script>
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