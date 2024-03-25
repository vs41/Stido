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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .wallet-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #009688;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 30px;
        }
        .wallet-header {
            text-align: center;
            padding: 10px;
            background-color: #009688;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .balance {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
            color: #009688;
        }
        .add-money-form {
            text-align: center;
        }
        .add-money-input {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .add-money-button {
            display: inline-block;
            background-color: #009688;
            color: #fff;
            text-align: center;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .add-money-button:hover {
            background-color: #007A6A;
        }
        .transaction-history {
            padding: 10px;
        }
        .transaction {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .transaction-details {
            flex: 1;
        }
        .transaction-amount {
            font-weight: bold;
            color: #009688;
        }
        .transaction-date {
            color: #888;
        }
    </style>
</head>
<body class="container-fluid">
    <?php  require 'partials/_navbar.php'?>
    <div class=" row">
        <div class="col-3 " style="background-color: #FFF3DA;font-size: 30px;">
            <ul class="mb-lg-0 list-unstyled">
                <li class="p-2">
                    <a class="text-reset text-decoration-none" href="index.php">Home <i class="fa-solid fa-house"></i></a>
                </li>
                <li class="p-2">
                    <a class="text-reset text-decoration-none" href="" onclick="getPage(1);return false;" >Profile <i class="fa-solid fa-user"></i></a>
                </li>
                <li class="p-2">
                        <a class="text-reset text-decoration-none" href="" onclick="getPage(2);return false;">Booking History <i class="fas fa-history"></i></a>
                </li>
                <li class="p-2">
                    <a class="text-reset text-decoration-none" href="" onclick="getPage(3);return false;">Stido Wallet <i class="fa-solid fa-wallet"></i></a>
            </li>
                <li class="p-2">
                    <a class="text-reset text-decoration-none" href="" onclick="getPage(4);return false;">Payment History <i class="fas fa-history"></i></a>
            </li>
            <li class="p-2">
                <a class="text-reset text-decoration-none" href="" onclick="getPage(5);return false;">Settings <i class="fa-solid fa-gear"></i></a>
        </li>
        <li class="p-2">
            <a class="text-reset text-decoration-none" href="logOut.php" >Log Out <i class="fas fa-sign-out-alt"></i></a>
    </li>
        <li class="p-2">
            <a class="text-reset text-decoration-none" href=""onclick="getPage(6);return false;">Help <i class="fas fa-hands-helping"></i></a>
    </li>
            </ul>
        </div>
        <div class="col-9 p-3"style="background-color:beige;display:block; " id="div1">
                <div class="row"  id="">
                         <div class="row">
                            <div class="col-4">
                            <img src="photos/UserProfilePhoto/user image.jpg" alt="" style="width: 250px;height: 250px;border-radius: 50%;">
                        </div>
                        
                            <div class="col-7" >
                                <table class="table">
                                <thead>
                                
                                            <tr>
                                                <th scope="row">Personal Details  <a class="" href="personalDedit.php"><i class="fas fa-edit" style="color:black"></i> </a> </th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                        <?php
                                            include 'partials/_connect_db.php';

                                            // Assuming 'username' is the session variable containing the username of the logged-in user
                                            if(isset($_SESSION['username'])){
                                                $username = $_SESSION['username'];

                                                $sql = "SELECT * FROM user_table WHERE userName ='$username'";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td>Name</td>
                                                <td><?php echo $row['username']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile No.</td>
                                                <td><?php echo $row['UNumber']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo $row['UEmail']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><?php echo $row['pswrd']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td><?php echo $row['Ucity']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>State</td>
                                                <td><?php echo $row['Ustate']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><?php echo $row['Uaddress']; ?></td>
                                            </tr>
                                            <?php }
                                                }
                                              }
                                              ?>
                                  </table>
                            </div>
                         </div>
                </div>  
                
                    
            
        </div>
        <div class="col-9 p-3"style="background-color:beige;display:none; " id="div2">
            <div class="row">
              <h2>  Booking History</h2>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">S.l</th>
                        <th scope="col">Date</th>
                        <th scope="col">Booking Id</th>
                        <th scope="col">Studio Name</th>
                        <th scope="col">Payment Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <th scope="row">1</th>
                        <td>10-12-2023</td>
                        <td>122252874</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:green">Successfull</span></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>10-12-2023</td>
                        <td>345678901</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:green">Successfull</span></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>10-12-2023</td>
                        <td>987654321</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:green">Successfull</span></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>10-12-2023</td>
                        <td>123456789</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:green">Successfull</span></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>10-12-2023</td>
                        <td>567890123</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:red">Failed</span></td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>10-12-2023</td>
                        <td>456789012</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:red">Failed</span></td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>10-12-2023</td>
                        <td>890123456</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:red">Failed</span></td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>10-12-2023</td>
                        <td>234567890</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:green">Successfull</span></td>
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <td>10-12-2023</td>
                        <td>678901234</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:green">Successfull</span></td>
                      </tr>
                      <tr>
                        <th scope="row">10</th>
                        <td>10-12-2023</td>
                        <td>789012345</td>
                        <td>Studio Genex - A complete photography solution</td>
                        <td><span style="color:green">Successfull</span></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="col-9 p-3"style="background-color:beige;display:none; " id="div3">
            <div class="row " >
              <h2></h2>
              <br>
              <div class="wallet-container">
        <div class="wallet-header">
            <h1>Your S<span style="color: pink;">T</span>IDO Wallet</h1>
        </div>
        <p class="balance"><i class="fa-solid fa-wallet"></i> Balance: $500.00</p>
        <form class="add-money-form" action="/photostudio/addMoney.php" method="post">
            <input class="add-money-input" type="number" placeholder="Enter the amount to add" />
            <button class="add-money-button"><i class="fa-solid fa-coins"></i> Add Money</button>
        </form>
       
    </div>
             
            </div>
           <br><br>
            <div class="row" >
                <h2>Balance History</h2>
              </div>
              <hr>
              <div class="container mt-4">
                        <form class="form-inline d-flex justify-content-center" method="GET">
                            <div class="form-group mx-2">
                                <label for="dateFilter" class="mr-2">Date:</label>
                                <input type="date" id="dateFilter" class="form-control">
                            </div>
                            <div class="form-group mx-2">
                                <label for="creditDebitFilter" class="mr-2">Credit/Debit:</label>
                                <select id="creditDebitFilter" class="form-control">
                                    <option value="all">All</option>
                                    <option value="credited">Credited</option>
                                    <option value="debited">Debited</option>
                                </select>
                            </div>
                            <div class="form-group mx-2">
                                <label for="statusFilter" class="mr-2">Status:</label>
                                <select id="statusFilter" class="form-control">
                                    <option value="all">All</option>
                                    <option value="successful">Successful</option>
                                    <option value="failed">Failed</option>
                                </select>
                            </div>
                            <div class="form-group mx-2 mt-3">
                            <button type="submit" class="btn btn-primary mt-2" >Filter the data</button>
                            </div>
                        </form>
              </div> 
              <hr>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">S.l</th>
                        <th scope="col">Date</th>
                        <th scope="col">Amount Add/Dedected</th>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Payment Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     
        <?php
        include 'partials/_connect_db.php';
        
        // Assuming 'username' is the session variable containing the username of the logged-in user
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];

            
        
            // First, fetch the user's UID based on their username
            $sql = "SELECT uid FROM user_table WHERE userName = '$username'";
            $result = mysqli_query($con, $sql);
           
            if (mysqli_num_rows($result) > 0) {
                // Fetch the user's UID
                $uid = mysqli_fetch_assoc($result)['uid'];
        
                // Initialize current balance
                $currentBalance = 0;
        
                // Fetch the wallet history
                $walletHistorySql = "SELECT * FROM balance_history WHERE uid = $uid ORDER BY transaction_id DESC";
                $walletHistoryResult = mysqli_query($con, $walletHistorySql);
                $sn=0;
                while ($walletRow = mysqli_fetch_assoc($walletHistoryResult)) {
                  // Calculate the current balance based on transaction type
                  $sn=$sn+1;
                 
                  ?>
                  <tr>
                      <th scope="row"><?php echo $sn; ?></th>
                      <td><?php echo $walletRow['timestamp']; ?></td>
                      <td><span style="color: <?php echo ($walletRow['transaction_type'] == 'Credited') ? 'green' : 'red'; ?>"><?php echo $walletRow['amount']; ?></span></td>
                      <td><?php echo $walletRow['transactionid']; ?></td>
                      <td><span style="color: green;">Successful</span></td>
                  </tr>
                  <?php
              }
        
                // After the while loop, update the total balance in the user_table
               
            }
        }
        ?>
                      
                    </tbody>
                  </table>
            </div>
        </div> 
        <div class="col-9 p-3"style="background-color:beige;display:none; " id="div4">
        <div class="row" >
                <h2>Balance History</h2>
              </div>
              <hr>
              <div class="container mt-4">
                        <form class="form-inline d-flex justify-content-center" method="GET">
                            <div class="form-group mx-2">
                                <label for="dateFilter" class="mr-2">Date:</label>
                                <input type="date" id="dateFilter" class="form-control">
                            </div>
                            <div class="form-group mx-2">
                                <label for="creditDebitFilter" class="mr-2">Credit/Debit:</label>
                                <select id="creditDebitFilter" class="form-control">
                                    <option value="all">All</option>
                                    <option value="credited">Credited</option>
                                    <option value="debited">Debited</option>
                                </select>
                            </div>
                            <div class="form-group mx-2">
                                <label for="statusFilter" class="mr-2">Status:</label>
                                <select id="statusFilter" class="form-control">
                                    <option value="all">All</option>
                                    <option value="successful">Successful</option>
                                    <option value="failed">Failed</option>
                                </select>
                            </div>
                            <div class="form-group mx-2 mt-3">
                            <button type="submit" class="btn btn-primary mt-2" >Filter the data</button>
                            </div>
                        </form>
              </div> 
              <hr>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">S.l</th>
                        <th scope="col">Date</th>
                        <th scope="col">Credited/Debited</th>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Payment Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     
        <?php
        include 'partials/_connect_db.php';
        
        // Assuming 'username' is the session variable containing the username of the logged-in user
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];

            
        
            // First, fetch the user's UID based on their username
            $sql = "SELECT uid FROM user_table WHERE userName = '$username'";
            $result = mysqli_query($con, $sql);
           
            if (mysqli_num_rows($result) > 0) {
                // Fetch the user's UID
                $uid = mysqli_fetch_assoc($result)['uid'];
        
                // Initialize current balance
                $currentBalance = 0;
        
                // Fetch the wallet history
                $walletHistorySql = "SELECT * FROM balance_history WHERE uid = $uid ORDER BY transaction_id DESC";
                $walletHistoryResult = mysqli_query($con, $walletHistorySql);
                $sn=0;
                while ($walletRow = mysqli_fetch_assoc($walletHistoryResult)) {
                  // Calculate the current balance based on transaction type
                  $sn=$sn+1;
                  
                  ?>
                  <tr>
                      <th scope="row"><?php echo $sn; ?></th>
                      <td><?php echo $walletRow['timestamp']; ?></td>
                      <td><span style="color: <?php echo ($walletRow['transaction_type'] == 'Credited') ? 'green' : 'red'; ?>"><?php echo $walletRow['amount']; ?></span></td>
                      <td><?php echo $walletRow['transactionid']; ?></td>
                      <td><span style="color: green;">Successful</span></td>
                  </tr>
                  <?php
              }
        
                // After the while loop, update the total balance in the user_table
               
            }
        }
        ?>
                      
                    </tbody>
                  </table>
            </div>
      </div>
      <div class="col-9 p-3"style="background-color:beige;display:none; " id="div5">
      </div>
      <div class="col-9 p-3"style="background-color:beige;display:none; " id="div6">
      <?php  require 'help_page.php'?>
      </div>


    </div>
    <?php  require 'partials/_footer.php'?>
      <script>
           function getPage(divNumber) {
            // Loop through all divs and hide them
            for (var i = 1; i <= 6; i++) {
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