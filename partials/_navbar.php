<?php 
session_start();
 
echo '<header class="row" style="background-color:#EDEFEE">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="photos/stido logo2.jpg" class="logo">
            <div class="d-flex justify-content-end col-lg-3 col-md-2 col-sm-6 col-7 " id="">';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo '<ul class="navbar-nav mb-2 mb-lg-0">
                
            <li class="nav-item"> <a class="nav-link" href="" style="font-size:30px ">Hi, ' . $_SESSION['username'] . '</a></li>
            <li class="nav-item">
                <a class="nav-link" href="" style="font-size:30px "> <div class="cart-btn">
                <i id="cart" class="fas fa-shopping-cart"></i>
                  <span class ="cart-quantity"></span>
              </div></a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="menuc.php"><span class="navbar-toggler-icon" style="font-size:30px "></span></a>
            </li>
        </ul>';
} else {
    echo '<ul class="navbar-nav mb-2 mb-lg-0">
    
            <li class="nav-item">
                <a class="nav-link" href="loginpage.php" style="font-size:30px ">Log in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cardshow.php" style="font-size:30px "><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="loginpage.php"><span class="navbar-toggler-icon" style="font-size:30px "></span></a>
            </li>
        </ul>';
}

echo '</div>
    </div>
</nav>
</header>';
?>

