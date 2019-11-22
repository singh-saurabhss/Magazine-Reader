<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.min.js"></script>

<style>
  
    *{
    padding: 0px;
        margin: 0px;}
        body{
            background-image: url("");
            background-size: cover;
            font-family: sans-serif;
            background-repeat: no-repeat;
        }
        .box{
            position: absolute;
            left: 50%;
            top: 50%;
            background-color: black;
            transform: translate(-50%,-50%);
            width: 350px;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 20px;
            box-shadow: 0 15px 15px rgba(0,0,0,.5);
        }
        h2{
            text-align: center;
            margin: 0 0 30px;
            padding: 0px;
            color: white;
            
        }
        .box .inputbox{
            position: relative;
        }
       
        .box .inputbox input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            margin-bottom: 10px;
            border: none;
            outline: none;
            background:transparent;
            border-bottom: 1px solid white;
        }
         .box .inputbox label{
            position: absolute;
            left: 0;
            top: 0;
             padding: 10px 0;
            font-size: 16px;
            color: white;
            pointer-events: none;
            transition: .5s;
            
        }
        .box .inputbox input:focus~label, .box .inputbox input:valid~label{
            top: -20px;
            left: 0;
            color: deepskyblue;
            font-size: 12px;
        }
        .box input[type="submit"]{
            margin-top: 10px;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            background:grey;
            padding: 10px 40px;
            border-radius: 5px;
            cursor: pointer;
            
        }
		.s2 {
            padding-top: 10px;
            height: 100px;
            width: 100%;
            background-color: whitesmoke;
            position: sticky;
            top: 0;
        }

        .s2 img {
            width: 10%;
            height: 40%;
        }

        .s2 nav {
            margin-top: 20px;
            display: inline;

        }

        .s2 nav a {
            color: black;
            font-family: sans-serif;
            font-size: 20px;
            margin-top: 30px;
            margin: 30px;
            text-decoration: none;
        }

        .s2 nav a:hover {
            color: red;
        }

        .s2 form input {
            width: 60%;
            margin-top: 1%;
            margin-left: 12%;
            /*            margin-right: 5%;*/
            height: 35px;
        }

        .s2 form button {
            height: 35px;
            border: 2px solid black;
            background-color: antiquewhite;
            border-radius: 5px;
        }
    </style>
</head>

<body>
<div class="s2">
            <img src="logo.png">
            <nav class="nav2">
			<a href="home.html">HOME</a>
                <a href="index4.html">ABOUT US</a>
                <a href="">STORIES</a>
                <a href="">NEWSPAPERS</a>
                <a href="">HELP</a>

            </nav>
        </div>
<div class="container">
<div class="r2">
</div>
<div class="r1">
<div class="container-fluid">
    <div class="row">
      <h2 style="text-align: center;" class="col-md-12">our image gallary</h2>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.jpg" class="thumbnail">
            <p>My image-1</p>
            <img src="s1.png" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.png" class="thumbnail">
            <p>My image-2</p>
            <img  src="s1.png" alt="">
        </a>
    </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.jpg" class="thumbnail">
            <p>My image-3</p>
            <img src="s1.png" alt="">
        </a>
    </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.jpg" class="thumbnail">
            <p>My image-1</p>
            <img src="s1.png" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.jpg" class="thumbnail">
            <p>My image-1</p>
            <img src="s1.png" alt="">
        </a>
    </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.jpg" class="thumbnail">
            <p>My image-1</p>
            <img src="s1.png" alt="">
        </a>
    </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.jpg" class="thumbnail">
            <p>My image-1</p>
            <img src="s1.png" alt="">
        </a>
    </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="bg.jpg" class="thumbnail">
            <p>My image-1</p>
            <img src="s1.png" alt="">
        </a>
    </div>
    </div>
</div>
</div>
</div>
<!--
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                
            <div class="row">
                <div class="col-md-3">
                    <div class="customdiv">
                    left
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="customdiv">
                    right
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
               <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
            <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
            <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
        </div>
        
         <div class="row">
            <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
            <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
               <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
            <div class="col-md-3">
                <div class="customdiv">Left side bar</div>
            </div>
-->
       
<!--        </div>-->
<!--    </div>-->
</body>
</html>
