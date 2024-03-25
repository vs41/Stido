<!DOCTYPE html>
<html>
<head>
    <title>My Simple HTML Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stdino</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
  
    </style>
</head>
<body class="container-fluid mainbodydiv">
<?php  require 'partials/_navbar.php'?>
    <div class="row justify-content-center" >
    <section class="gradient-custom">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-7 col-lg-5 col-xl-4">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
          <div class="justify-content-center d-flex">
          <h1 class="tage_line">S<span class="stido">T</span>IDO</h1>
      </div>
     
            <form>
            <hr>
              <div>
                     <ul class="d-flex justify-content-center list-unstyled row">
                      <div class="col-6 justify-content-center">
                         <li class="btn btn-primary pl-2 pr-2" onclick="getPage(1);return false;">Credit/debit card  </li>
                      </div>   
                      <div class="col-6  justify-content-center" onclick="getPage(2);return false;">
                          <li class="btn btn-primary p-r-5 p-l-5" >UPI</li>
                     </div>    
                     </ul>
                     <hr>
              </div>
              <div>
              <input type="text" id="typeText" class="form-control form-control-lg mb-3" siez="17"
                    placeholder="Enter the amount" minlength="19" maxlength="19" />
                   
              </div> 
              <div id="div1" style="display:block">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <div class="form-outline">
                                                              <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                                                                placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                                             
                                                            </div>
                                       <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" width="30px" />
                                      <img src="https://img.icons8.com/color/48/000000/visa.png" alt="visa" width="30px" />
                                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/RuPay.svg/1200px-RuPay.svg.png" alt="visa" width="30px" />
                                      </div>

                                      <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-outline">
                                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                                            placeholder="Cardholder's Name" />
                                         
                                        </div>
                                      </div>

                                <div class="d-flex justify-content-between align-items-center pb-2">
                                  <div class="form-outline">
                                    <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY"
                                      size="7" id="exp" minlength="7" maxlength="7" />
                                    <label class="form-label" for="typeExp">Expiration</label>
                                  </div>
                                  <div class="form-outline">
                                    <input type="password" id="typeText2" class="form-control form-control-lg"
                                      placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                    <label class="form-label" for="typeText2">Cvv</label>
                                  </div>
                                  <button type="button" class="btn btn-info btn-lg btn-rounded">
                                    <i class="fas fa-arrow-right"></i>
                                  </button>
                                </div>
               </div> 
               <div id="div2" style="display:none">
               <input type="text" id="typeText" class="form-control form-control-lg mb-3" siez="17"
                    placeholder="Enter UPI ID" minlength="19" maxlength="19" />
                    <button type="button" class="btn btn-info btn-lg btn-rounded">
                                    <i class="fas fa-arrow-right"></i>
                                  </button>    
                   
              </div> 



               </div>                
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php  require 'partials/_footer.php'?>
    </div>
    <script>
        function getPage(divNumber) {
            // Loop through all divs and hide them
            for (var i = 1; i <= 2; i++) {
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
</body>
</html>




