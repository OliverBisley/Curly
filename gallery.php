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

      .gallery_section{
        width: 100%;
        height: 900px;

      }

      .item{
        width: 33.333%;
        height: 600px;


      }

      #item1{
        background-color: yellow;
      }
      #item2{
        background-color: red;
      }


      @media screen and (max-width: 1200px) {

        .item{
          width: 50%;
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

      <nav>
        <h1>CURLY.</h1>
        <ul>
          <a href="index.php"><li>HOME</li></a>
          <a href="shop.php"><li>SHOP</li></a>
          <a href="gallery.php"><li>GALLERY</li></a>
          <a href="hemp.php"><li>HEMP</li></a>
        </ul>
      </nav>
      <div class="divider-line">

      </div>


  	</section>

    <div class="gallery_section">


    </div>







  <script async src="https://cdn.snipcart.com/themes/v3.2.2/default/snipcart.js"></script>
  <div hidden id="snipcart" data-api-key="NDgyYmRmYzUtOTk1Yy00ODNmLWE1M2EtODZhYTEyNmZkOTk5NjM3NzMwODA1NDUxMTU0OTc4"></div>

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
  </body>
</html>
