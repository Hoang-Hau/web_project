<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <style>
    img.\31 23 {
      width: 80%;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  ?>
  <nav class="nav">
    <header>
      <div class="header-top">
        <div class="header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
                <div class="full">
                  <div class="center-desk">
                    <div class="logo">
                      <a href="pages/index.php"><img src="images/logo.jpg" alt="#" /></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">

                <div class="menu-area">
                  <div class="limit-box">
                    <nav class="main-menu ">
                      <ul class="menu-area-main">
                        <li><a href="#">Homepage</a></li>
                        <li><a href="pages/profile.php">Profile</a></li>
                        <li><a href="pages/contact.php" class="nav-item">Contact</a></li>
                        <li><a href="pages/giohang.php" class="nav-item">Cart</a></li>
                        <li><a href="pages/register.php">Register </a></li>
                        <li><a href="pages/login.php">Login</a></li>
                        <li><a href="index.php?action=logout">Logout <?php
                                                                      if (isset($_SESSION['dangnhap'])) {
                                                                        echo $_SESSION['dangnhap'];
                                                                      }
                                                                      ?></a></li>
                        <?php
                        if (isset($_GET['action']) && $_GET['action'] == "logout") {
                          unset($_SESSION['dangnhap']);
                          header("location:index.php");
                        }
                        ?>
                        <li> <a href="#"><img src="images/icon1.jpg" alt="#" /></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
      </div>
    </header> 
   
      <img src="./images/homeanh.jpg" style="width:100%" >
      <br>
      
    <header>
        <h1>Product List </h1>
        
    </header> 
    <?php
    include("./config/config.php");
    $sql_sanpham = "SELECT*FROM tb_product LIMIT 10";
    $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
    ?>

    <body>
      <section>
        <?php while ($row_sanpham = mysqli_fetch_array($query_sanpham)) { ?>
          <article class="View">
            <h1><?php echo $row_sanpham['PName'] ?></h1>
            <img src="<?php echo $row_sanpham['Picture'] ?>" class="123">
            <div class="price"><?php echo $row_sanpham['Price'] . '$' ?></div>
            <ul>
            </ul>
            <button>View product</button>
            <form action="pages/cart.php?idproduct=<?php echo $row_sanpham['Pid'] ?>" method="POST">
              <input type="submit" name="themgiohang" value="Add to Cart">
            </form>

          </article>
        <?php } ?>
      </section>
    </body>
    <br><br>
    <footer>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a href="#" class="logo_footer"> <img src="images/logo.jpg" alt="#" /></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>Communications
                        <br>Email Address
                      </li>
                      <li>
                        <a href="#"></a>(+84 941768344)
                      </li>
                      <li>
                        <a href="#"></a>HCH-Shop9411@gmail.com
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="address">
                    <h3>Social Link</h3>
                    <ul class="Menu_footer">
                      <li class="active"> <a href="#">Twitter</a> </li>
                      <li><a href="#">Facebook</a> </li>
                      <li><a href="#">Instagram</a> </li>
                      <li><a href="#">Linkdin</a> </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>News</h3>
                    <form class="news">
                      <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                      <button class="submit">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="copyright">
          <div class="container">
            <p>Copyright © 2019 Design by HCH SHOP </a></p>
          </div>
        </div>
      </div>
    </footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.0.0.min.js"></script>
    <script src="../js/plugin.js"></script>

    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>