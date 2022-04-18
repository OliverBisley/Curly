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



      }

      .header_p{
        font-family: modenaRegular;
        z-index: 2;
        font-size: 20px;
        color: lightgray;



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
      	color: black;
        text-align: center;
        justify-content: center;
        flex-direction: column;

      }

      nav{
        z-index: 4;
        position: fixed;
        top: 0px;
        text-align:
        left: -10px;


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


      }

    </style>
    <meta charset="utf-8">
    <title></title>

    <link rel="preconnect" href="https://app.snipcart.com" />
    <link rel="preconnect" href="https://cdn.snipcart.com" />
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.2.2/default/snipcart.css" />
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <section class="wrapper">
      <nav>
        <ul>
          <li>HOME</li>
          <li>SHOP</li>
          <li>OUR MISSION</li>
          <li>CONTACT</li>
        </ul>
      </nav>
    </section>
