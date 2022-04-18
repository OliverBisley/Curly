<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <style>

    .credit{
      position: absolute;
      left: 20px;

      font-size: 10px;

    }

    h1{
      font-weight: lighter;
    }

    #youtube_logo{
      width: 25px;
      height: 25px;
      margin: 10px;

    }

    *{
      padding: 0;
      margin: 0;
      font-weight: normal;

    }

    a{
      color: black;
    }

    body{
      width: 100%;
      text-align: center;

    }
    @font-face {
        font-family: modenaRegular;
        src: url(fonts/mogena/Mogena.ttf);
    }


    @font-face {
        font-family: Nick;
        src: url(fonts/nicholson-gothic/NicholsonGothic-Regular.ttf);
    }
      .snipcart-add-item{
        background-color: yellow;
        display: none;
      }

      .header_text{
        font-family: modenaRegular;
        z-index: 2;
        font-size: 70px;
        font-weight: bolder;



      }

      .header_p{
        font-family: modenaRegular;
        z-index: 2;
        font-size: 20px;
        color: white;



      }

      a{
        text-decoration: none;
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
      	height: 100vh;
      	display: flex;
      	align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: column;
        color: white;

      }
      .video-wrap {
      	position: absolute;
      	top: 0;
      	left: 0;
        width: 100%;
        height: 100%;
      	overflow: hidden;
      }
      .video-wrap video {
      	min-width: 100%;
      	min-height: 100%;

      }
      .overlay {
      	z-index: 1;
      	height: 100%;
      	width: 100%;
      	top: 0;
      	left: 0;
      	background: #2D3E50;
      	position: absolute;
      	opacity: .4;
      }

      nav{
        z-index: 4;
        position: absolute;
        top: 0px;
        text-align:
        left: -10px;
        width: 100%;
        height: 60px;



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
        color: white;



      }

      .newIn{
        font-size: 27px;
        margin-top: 40px;
        text-transform: uppercase;

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

      .image_overlay{
        width: 350px;
        height: 350px;
        margin: 0px;
        background-color: yellow;



      }




      .item img{
        width: 350px;
        height: 350px;
      }

      .item a{
        color: black;
        text-decoration: none;

      }

      .image_banner{
        width: 50%;
        height: 400px;
        background-size: cover;
        align-items: center;
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
        background-attachment: fixed;
      }


      .image_banner h1{
        color: white;
        font-size: 22px;
        position: relative;

        text-decoration: none;
      }

      #image_banner_1{
        background-color: #feedff;
        flex-direction: column;
        color: black;

      }

      #image_banner_1 h1{
        color: black;
      }

      #image_banner_2{
        background-image: url(Images/cover_images/boys.png);
        background-position:center;
      }

      #image_banner_3{
        background-image: url(Images/cover_images/collection_pic.png);
        background-size: contain;

      }

      #image_banner_4{
        background-image: url(Images/cover_images/levi.png);
        background-size: cover;
        background-attachment: scroll;


      }



      .about{
        width: 50%;
        height: 400px;

        background-color: #fff7de;
      }

      .about p {
        z-index: 4;
        font-size: 18px;
        font-weight: lighter;
      }

      .textbox{
        width: 45%;
        margin-left: 380px;
        margin-top: -290px;
        text-align: left;
      }



      .profile_pic{
        display: flex;
        min-width: 200px;
        width: 50%;
        height: 100%;
        background-image: url(Images/cover_images/profilepic.png);
        background-size: cover;

        position: relative;

        z-index: 0;



      }



      .divider-line-footer{
        width: 100%;
        position: absolute;

        background-color: gray;

        height: 0.5px;
      }

      .divider-line{
        width: 60%;
        position: absolute;
        left: 20%;
        background-color: gray;
        margin-top: 20px;
        height: 0.5px;
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

      .tile_wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;

      }

      div.elem-group {
  margin: 40px 0;
}

label {
  display: block;
  padding-bottom: 4px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 12px;;
  font-family: inherit;
  width: 400px;
  padding: 8px;
}

textarea {
  height: 100px;
}

button{
  position: relative;



  background-color: black;
  color: white;
  text-transform: uppercase;
  padding: 10px;
  margin-top: 10px;

  border: none;
  font-weight: 100;
}

button:hover{
  cursor: pointer;
}

.sidenav{
  display: none;
}

#open{
  display: none;
}



@media screen and (max-width: 1200px) {

  .item a{
    font-size: 20px;

  }

  footer {
    font-size: 15px;
  }

  .image_banner h1{

    font-size: 40px;
  }
  .about{
    width: 100%;

  }



  .about p {

    font-size: 14px;
  }







  .image_banner{
    width: 100%;
  }

  nav{
    display: none;
  }

  .profile_pic{
    min-width: 200px;
    width: 200px;
    height: 200px;
      left: 130px;
      top: 70px;
  }

  .textbox{
    width: 45%;
    margin-left: 400px;
    margin-top: -100px;
    text-align: left;

  }

  .textbox p{
    font-size: 30px;
  }


  input, select, textarea {
    border-radius: 2px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 22px;;
    font-family: inherit;
    width: 400px;
    padding: 8px;
  }

  textarea {
    height: 100px;
  }

  button{
    margin-bottom: 20px;
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

.header_text, .header_p, nav {
            animation: fadeInAnimation ease  7s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;

        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }


        .header_p{
          animation: .8s shake infinite, fadeInAnimation ease 16s;
        }


        @keyframes shake {
          0% { transform: skewX(-25deg); }
          5% { transform: skewX(25deg); }
          10% { transform: skewX(-25deg); }
          15% { transform: skewX(25deg); }
          20% { transform: skewX(-25deg); }
          25% { transform: skewX(25deg); }
          55% { transform: skewX(0deg); }
          100% { transform: skewX(0deg); }
        }









    </style>
    <meta charset="utf-8">
    <title>Curly the collective</title>
<embed src="Curly_landing.wav" loop="false" autostart="true" width="2" height="0">
    <link rel="preconnect" href="https://app.snipcart.com" />
    <link rel="preconnect" href="https://cdn.snipcart.com" />
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.2.2/default/snipcart.css" />
  </head>
  <body>


    <section class="wrapper">


<span id = "open" style="font-size:100px;cursor:pointer;color:white;" onclick="openNav()">&#9776; </span>
      <nav>


        <ul>
          <a href="index.php"><li>HOME</li></a>
          <a href="shop.php"><li>SHOP</li></a>
          <a href="gallery.php"><li>GALLERY</li></a>
          <a href="hemp.php"><li>HEMP</li></a>
        </ul>
      </nav>
      <h1 class="header_text"> CURLY. </h1>
      <h1 class="header_p"> the collective </h1>
  		<div class="video-wrap">
  			<video src="Curly_landing.mp4" playsinline autoplay muted loop></video>
  		</div>
  		<div class="overlay"></div>

  	</section>

      <h1 class="newIn">New in</h1>

      <div class="divider-line">

      </div>
      <section class="shop_preview">

        <div class="item">
          <div class="image_overlay">

          <img src="Images/Shop_Images/browntee.jpeg">
          <a href="product_pages/browntee.php"> Tee    - $99</a>

        </div>
        </div>

        <div class="item">
          <div class="image_overlay">
          <img src="Images/Shop_Images/gdya.jpeg">
          <a href="#"> Tee    - $99</a>

          </div>
        </div>


        <div class="item">
          <div class="image_overlay">

          <img src="Images/Shop_Images/spookywhite.jpeg">
          Tee    - $99</a>

          </div>
        </div>




      </section>


      <div class="tile_wrapper">
      <div class="image_banner" id="image_banner_3">

          <a href="#"><h1>Browse our collection → </h1></a>


      </div>

      <div class="about">
        <div class="profile_pic">
        </div>
        <div class="textbox">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididun mollit anim id est laborum.</p>
        </div>

    </div>

      <div class="image_banner" id="image_banner_1">
                <h1>Contact us </h1>

                  <form action="contact.php" method="post">
                  <div class="elem-group">

                    <input type="text" id="name" name="visitor_name" placeholder="Name" pattern=[A-Z\sa-z]{3,20} required>
                  </div>
                  <div class="elem-group">

                    <input type="email" id="email" name="visitor_email" placeholder="Email" required>
                  </div>

                  <div class="elem-group">

                    <textarea id="message" name="visitor_message" placeholder="Flick us a message" required></textarea>

                  </div>
                  <button type="submit">Send Message</button>


                </form>
      </div>


      <div class="image_banner" id="image_banner_4">

          <a href="#"><h1>Follow your nose, Browse our gallery → </h1></a>
          <div class="overlay">
          </div>
      </div>
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
      <p class="credit">Site made by Oliver Bisley</p>
      <div id="mySidenav" class="sidenav">
        <a style="font-size:220px; position: absolute; top: -200px;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">HOME</a>
        <a href="shop.php">SHOP</a>
        <a href="gallery.php">GALLERY</a>
        <a href="hemp.php">HEMP</a>
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
  <script async src="https://cdn.snipcart.com/themes/v3.2.2/default/snipcart.js"></script>
  <div hidden id="snipcart" data-api-key="NDgyYmRmYzUtOTk1Yy00ODNmLWE1M2EtODZhYTEyNmZkOTk5NjM3NzMwODA1NDUxMTU0OTc4"></div>
  </body>
</html>
