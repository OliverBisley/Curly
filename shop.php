<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <style>

    *{
      padding: 0;
      margin: 0;
    }

    body{
      width: 100%;
      text-align: center;
    }

    #youtube_logo{
      width: 25px;
      height: 25px;
      margin: 10px;

    }

    a{
      text-decoration: none;
      color: black;
    }

    h1 a{
      color: white;
    }

      body {
      	font-family: 'Montserrat', sans-serif;
      	color: #2D3E50;
      }
      section {

      	margin: auto;
      	text-align: center;
      }
      .wrapper {
      	display: flex;
      	align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: column;


      }

      .wrapper h1{
        color: black;
        font-size: 25px;
        margin-top: 20px;
      }

      nav{
        z-index: 4;
        position: fixed;
        top: 0px;
        text-align:
        left: -10px;
        background-color: white;
        width: 100%;
        height: 100px;



      }

      nav ul{
        list-style: none;
        display: inline-block;
        margin: 0;
        padding: 0;

      }

      nav li{
        margin-left: auto;
        margin-right: auto;
        margin: 20px 100px 100px 100px;
        float: left;
        color: black;



      }





      .shop_preview{
        display: flex;
      	align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: row;
        margin: 0;
        padding: 0;
        flex-wrap: wrap;
        margin-top: 50px;


      }


      .item{
        width: 350px;
        height: 350px;
        background-color: gray;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: column;
        margin: 50px;
        padding: 0px;
        text-align: center;

      }

      .item img{
        width: 350px;
        height: 350px;
      }

      .item a{
        color: black;
        text-decoration: none;
        font-weight: lighter;

      }

      .image_overlay{
        width: 350px;
        height: 350px;
        margin: 0px;
        background-color: yellow;



      }

      .divider-line{
        width: 100%;
        position: absolute;
        background-color: gray;
        margin-top: 0px;
        height: 1px;
      }

      footer{
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;

      }

      .third-footer{
        width: 400px;
        height: 150px;
        padding: 30px;
        display: flex;
        align-items: center;

        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;

      }

      #third-2{
        align-items: baseline;
        flex-direction: column;

      }

      #third-3{
        align-items: baseline;
        flex-direction: column;
        text-align: left;


      }

      #third-2 a {
        margin-left: 80px;
      }


      .button{

        background-color: black;
        color: white;
        text-transform: uppercase;
        padding: 10px;
        margin-top: 10px;

        border: none;
        font-weight: 100;
      }

      .button:hover{
        cursor: pointer;
      }

      .input{
        padding: 5px;
        border: 2px black solid;
        margin-top: 10px;

      }

      .image_banner{
        width: 100%;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        background-image: url(Images/cover_images/boys.png);
        background-position:center;
        background-attachment: fixed;
      }

      .image_banner h1{
        color: white;
        font-size: 20px;
      }

      .sidenav{
        display: none;
      }

      #open{
        display: none;
      }

      @media screen and (max-width: 1200px) {

        .newIn{
          font-size: 50px;
          margin-top: 100px;
        }

        footer {
          font-size: 20px;
        }
        nav{
          display: none;
        }


        #open{
          display: block;
          z-index: 9;
          position: absolute;
          left: 50px;
          top: 10px;

        }

        .item a{
          font-size: 20px;

        }

        .sidenav {

          display: block;
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 10;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
          text-align: left;

        }

        .sidenav a {
          padding: 8px 8px 8px 100px;
          text-decoration: none;
          font-size: 75px;
          color: white;
          display: block;
          transition: 0.3s;
          margin-top: 150px;
          font-weight: 100;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        #main {
          transition: margin-left .5s;
          padding: 16px;
        }

        .image_banner h1{

          font-size: 40px;
        }

      }









    </style>
    <meta charset="utf-8">
    <title>Curly the collective</title>

    <link rel="preconnect" href="https://app.snipcart.com" />
    <link rel="preconnect" href="https://cdn.snipcart.com" />
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.2.2/default/snipcart.css" />
  </head>
  <body>

    <section class="wrapper">

      <span id = "open" style="font-size:100px;cursor:pointer;color:black;" onclick="openNav()">&#9776; </span>

      <nav>
        <h1>CURLY.</h1>
        <ul>
          <a href="index.php"><li>HOME</li></a>
          <a href="#"><li>SHOP</li></a>
          <a href="gallery.php"><li>GALLERY</li></a>
          <a href="hemp.php"><li>HEMP</li></a>
        </ul>
      </nav>
      <div class="divider-line">

      </div>
  	</section>






    <h1 class="newIn">Shop</h1>
    <section class="shop_preview">



      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/tee1.php"> Tee 1    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/tee2.php"> Tee 2    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/tee3.php"> Tee 3    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
        <a href="product_pages/tee4.php"> Tee 4    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/tee5.php"> Tee 5    - $99</a>
        </div>
      </div>










    </section>

    <div class="image_banner">

        <h1><a href="hemp.php">Inspired by the outdoors, find out more → </a></h1>

    </div>

    <section class="shop_preview">



      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/Hoodie 1.php"> Hood 1    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/Hoodie 2.php"> Hood 2    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/Hoodie 3.php"> Hood 3    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <a href="product_pages/Hoodie 4.php">Hood 4    - $99</a>
        </div>
      </div>

      <div class="item">
        <div class="image_overlay">
        <img src="Images/Shop_Images/gdya.jpeg">
          <<a href="product_pages/Hoodie 5.php">    - $99</a>
        </div>
      </div>


    </section>
  <script async src="https://cdn.snipcart.com/themes/v3.2.2/default/snipcart.js"></script>
  <div hidden id="snipcart" data-api-key="NDgyYmRmYzUtOTk1Yy00ODNmLWE1M2EtODZhYTEyNmZkOTk5NjM3NzMwODA1NDUxMTU0OTc4"></div>
  </body>
  <div class="divider-line">
  </div>
  <footer>
    <div class="third-footer">
      <p>@curlythecollective → </p>
      <img src="Images/Icons/youtube_logo.svg"  id="youtube_logo"lt="">
      <img src="Images/Icons/instagram_logo.svg"  id="youtubelogo"lt="">
    </div>
    <div class="third-footer" id="third-2">
    <a href="#">Contact us</a>
    <a href="#">Shipping and returns</a>
    </div>
    <div class="third-footer" id="third-3">
      <p>Subscribe to our maillist to recieve updates and get access to exclusive offers </p>
      <form action="browntee.php" method="post">
        <input type="email"class="input"name="reg_email" placeholder="Email" value =  "<?php
        if (isset($_SESSION['reg_email'])){
          echo $_SESSION['reg_email'];
        } ?>"required>

        <br>

        <input type="submit" class="button" name="submit_button" value="SUBSCRIBE"></button>
      </form>
    </div>


  </footer>


  <div id="mySidenav" class="sidenav">
    <a style="font-size:220px; position: absolute; top: -200px;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">HOME</a>
    <a href="shop.php">SHOP</a>
    <a href="gallery.php">GALLERY</a>
    <a href="contact.php">CONTACT</a>
  </div>


  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "750px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
  }
  </script>
</html>
