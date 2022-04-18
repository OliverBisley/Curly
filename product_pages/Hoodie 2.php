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

      .product_wrapper {
      	display: flex;
      	align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: row;
        width: 80%;
        position: relative;
        top: 150px;
        flex-wrap: wrap;

      }
      .product_image{
        width: 500px;
        height: 500px;
        background-image: url("../Images/Shop_Images/browntee.jpeg");
        background-size: cover;

      }



      .info{
        width: 500px;
        height: 500px;

        text-align: left;



      }

      .info h1{
        margin: 40px;
        margin-top: 60px;
        font-size: 25px;
      }

      .info h2{
        margin: 40px;
        font-size: 17.5px;
      }

      .info p {
        margin: 40px;
      }

      .snipcart-add-item{
        background-color: black;
        color: white;
        text-transform: uppercase;
        padding: 20px;
        margin-left: 40px;
        border: none;
      }

      .snipcart-add-item:hover{
        cursor: pointer;
      }

      .newIn{
        font-size: 20px;
        margin-top: 250px;


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

      .sidenav{
        display: none;
      }

      #open{
        display: none;
      }


      @media screen and (max-width: 1200px) {
        nav{
          display: none;
        }
        .item a{
          font-size: 20px;

        }

        footer {
          font-size: 25px;
        }

        .image_banner h1{

          font-size: 40px;
        }

        .info h1{
          font-size: 40px;
        }

        .info h2{
          font-size: 30px;
        }

        .info p{
          font-size: 25px;
        }

        .newIn{
          font-size: 40px;
        }

        #open{
          display: block;
          z-index: 9;
          position: absolute;
          left: 50px;
          top: 10px;

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
          <a href="../index.php"><li>HOME</li></a>
          <a href="../shop.php"><li>SHOP</li></a>
          <a href="../gallery.php"><li>GALLERY</li></a>
          <a href="../hemp.php"><li>HEMP</li></a>
        </ul>
      </nav>
      <div class="divider-line">

      </div>
  	</section>


    <section class="product_wrapper">

      <div class="product_image">

      </div>

      <div class="info">

        <h1>Brown tee</h1>
        <h2> $89.00</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut laborum.</p>
        <p> Choose size in checkout (Available sizes shown)</p>
        <button class="snipcart-add-item"
        data-item-id="tee-#1"
        data-item-price="1.00"
        data-item-description="Tee #1"
        data-item-image="../Images/Shop_Images/browntee.jpeg"
        data-item-name="Tee Number 1">
        Add to cart
      </button>
      </div>
    </section>


    <h1 class="newIn">You may also like....</h1>
    <section class="shop_preview">



      <div class="item">
        <div class="image_overlay">
        <img src="../Images/Shop_Images/gdya.jpeg">
          <a href="#"> Gday tee    - $99</a>
        </div>
      </div>


      <div class="item">
        <div class="image_overlay">

        <img src="../Images/Shop_Images/spookywhite.jpeg">
        <a href="#"> Ket tee    - $99</a>

        </div>
      </div>


      <div class="item">
        <div class="image_overlay">

        <img src="../Images/Shop_Images/wheeltee.jpeg">
        <a href="#"> Bongz tee    - $99</a>

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
      <img src="../Images/Icons/youtube_logo.svg"  id="youtube_logo"lt="">
      <img src="../Images/Icons/instagram_logo.svg"  id="youtubelogo"lt="">
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

  <p class="credit">Site made by Oliver Bisley</p>
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
