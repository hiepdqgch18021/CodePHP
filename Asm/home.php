<!doctype html>
<html lang="en">
  <head>
    <title>YangHi Mobile</title>
    <link rel="shortcut icon" href="image/logo9.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" href="Asm.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header>
             <div class="container">
                    <div class="row">
                         <a href="" class="col-12 col-md-8 header-info-company">                          
                              <div class="header-logo">
                                <img src="image/logo9.png" alt="Logo">
                              </div>

                              <div class="header-text">
                                      <h1>Smartphone YangHi</h1>
                                      <i>Improve your life</i>
                              </div>                          
                         </a>
                         <div class="col-md-4 d-none d-md-block header-social-company"> 
                          <ul>
                            <li>
                              <a href="mailto:hiepdqgch18021@fpt.edu.vn"><img src="image/email.png" alt=""></a>
                            </li> 
                            <li>
                              <a href="https://www.facebook.com/hiep.duong.35912/"><img src="image/facebook.jpg" alt=""></a>
                            </li>
                            <li>
                              <a href="https://www.youtube.com/user/Apple"><img src="image/youtube.png" alt=""></a>
                              </li>
                            <li>
                              <a href="https://chat.zalo.me/"><img src="image/Zalo.png" alt=""></a>
                            </li>
                          </ul>
                         </div>                  
                    </div>
             </div> 
      </header>
      <div class="view-product-screen">
      <nav>
        <div class="container">
          <div class="row">

          <div class="col-6 col-lg-3">
              <div class="nav-title-category">
                <i class="fas fa-bars" aria-hidden="true"></i>
                <span>Category</span>
                <ul>
                </ul>
              </div>
            </div>
            
<div class=" col-6 col-lg-9">
  <div class=" justify-content-end justify-lg-content-bettwen link-nav">

    <div class="d-none d-lg-block link-nav-main">  
      <ul>
        <li>
          <a href="home.php" class="active">Home</a>
        </li>
        <li>
          <a href="homeAdmin.php" class="active">Admin</a>
        </li>       
      </ul>
    </div>

  </div>
</div>
      </nav>
      
      <main>
      <section class="banner-page">
          <div  class="container">
            <div class="row">
              
            <div class="col-lg-3 d-lg-block">
                <ul class="list-product-type">
                    <li class="product-type-item">
                  <ul>
                              <?php
                    include_once ('function.php');
                    $sql = "SELECT * FROM category";
                    $result = execute_query($sql);
                    while ($ctg = mysqli_fetch_array($result)) { ?>
                    <li><a href="category_detail.php?categoryId=<?= $ctg['categoryId'] ?>"><?= $ctg['categoryName'] ?></a></li>
                    <?php } ?>
                  </ul>
                    </li> 
                </ul>
              </div>

              <div class="col-lg-9 ">
                   <div class="banner-main">
                     <a href="">
                       <img src="image/ads-iphone12.gif" alt="iphone12">
                     </a>
                     <a href="">
                       <img src="image/ads-Vsmart.jpg" alt="Vsmart">
                     </a>
                     <a href="">
                       <img src="image/ads-xiaomi.jpg" alt="xiaomi">
                     </a>
                   </div>
              </div>
              
<div class="product-our">
              <h2 class="product-our-title">PRODUCT OUR</h2> 

            <div class="list-category">            
                  <?php
                        $sql1 = "SELECT * FROM product";
                        $rs1 = execute_query($sql1);
                        while ($prd = mysqli_fetch_array($rs1)) { ?>
                          <div class="product-detail">
                            <div class="product_image">
                              <a href="product_detail.php?productId=<?= $prd['productId'] ?>">
                              <img src='image\<?= $prd['productImg']?>' width="150" height="150"> 
                              </a>
                            </div> 
                            <div class="product-info"> 
                              <?= $prd['productName'] ?> 
                            </div>     
                          </div>
                  <?php } ?>
          </div>
</div>
            </div>
          </div>
        </section>
   </main> 
      </div>  

      <footer>
        <section class="footer-list-info">
          <div class="container">
            <div class="row">
              <div class="col-md-4 list-intro">
              
                <div class="footer-logo">
                  <img src="image/logo9.png" alt="">
                </div>
                <div class="header-text">
                        <h1>Smartphone YangHi</h1>
                        <i>Improve your life</i>
                </div>
                 
                <p>YangHi phone equipment distribution online 
                  website belongs to Sirius Vietnam Co., Ltd.
                   Proud to be the leading supplier of phone 
                   materials for customer.
                   Pioneering in price, first in service.</p> 
              </div>
              <div class="col-md-4 list-connect">
               <div class="footer-title">
                 <span>Address</span>
               </div>
               <div class="footer-content">
                 <p>
                  <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                  <span>
                    No. 2 Lot 6, Trung Yen Street, 9 Ward Trung Trung, Cau Giay District                 </p>
                 <p>
                   <i class="fas fa-phone-alt" aria-hidden= "true"></i>
                   <a href="tel:0363979122" class="link-phone"> 0363979122</a>
                 </p>
                 <p>
                  <i class="fas fa-envelope"aria-hidden="true"></i>
                  <a href="mailto:hiepdqgch18021@fpt.edu.vn" class="link-mail">hiepdqgch18021@fpt.edu.vn</a>
                 </p>
               </div>
              </div>
              <div class="col-md-4 list-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3918082570517!2d105.801
                             22070000002!3d21.017003200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1
                             s0x3135ab5e96304db9%3A0xb4f27d4525abcdb2!2sHanoi%20Branch%20Of%20The%20Church%20Of
                             %20Jesus%20Christ%20Of%20Latter-Day%20Saints%20(Lds%20Church)!5e0!3m2!1sen!2s!4v16
                             07937824225!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">View Map</iframe>
              </div>
            </div>
          </div>
          <h6>© 2020 Copyright by Hiepdqgch18021 - Designed by HiepDuong</h6>
        </section>
      </footer>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="http://bootstrap-notify.remabledesigns.com/js/bootstrap-notify.min.js"></script> 
<script>
  $(".banner-main").slick();
</script>

   </body>
</html>




