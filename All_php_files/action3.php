<?php
session_start();
$connect=new mysqli("localhost","root","","web2");

if (!isset($_SESSION['email'])) {

    header("location:login.html");

    die();

} else {
$user_name = $_SESSION['email'];

}
?>


<html lang="">
                  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            background-color: lightslategray;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            height: 2000px;
            background-color: white;
            margin-left: 5%;
            margin-right: 5%;
        }

        .s1 {
            height: 40px;
            width: 100%;
            background-color: mediumblue;

        }

        .s1 nav {
            display: inline-block;
        }

        .s1 nav a {
            color: white;
            font-family: sans-serif;
            font-size: 20px;
            margin: 50px;

            text-decoration: none;
        }

        .s1 nav .a1 {
            color: white;
            font-family: sans-serif;
            font-size: 20px;
            /*            margin: 50px;*/
            text-decoration: none;
            text-align: right;
            right: 0;
        }

        .s1 nav a:hover {

            color: coral;
            font-family: sans-serif;
            font-size: 20px;
            /*            margin: 50px;*/
            text-decoration: underline;
            text-align: right;
            right: 0;
            /*             border: 5px solid coral;*/
            border-radius: 5px;
            /*             background-color: deeppink;*/
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
            width:60%;
            margin-top: 1%;
            margin-left: 12%;
            height: 35px;
        }

        .s2 form .searchbtn {
			width:70px;
            height: 35px;
            border: 2px solid black;
            background-color: antiquewhite;
            border-radius: 5px;
        }

        . .s1 nav .a1 {
            /*            float: right;*/
        }

        .s3 {
            margin-left: 10%;
            margin-right: 15%;
            width: 80%;
            height: 400px;
            margin: 10px 0;
			padding-left:10%;
        }

        .magazine-row {
            width: 100%;
            height: 400px;
            position: relative;

        }

        .magazine-row table {
            width: inherit;
            height: inherit;

        }

        .magazine-row table td {
            width: 20%;
            height: 100% background-color: black;
            position: relative;

        }

        .magazine-row table tr td a img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            object-position:center;
            transition: transform .2s;
        }

        .magazine-row table tr td:hover a img {
            transform: scale(1.2);

        }

        h3 {
            font-size: 30px;
            color: cadetblue;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="s1">
            <nav>
               <a href="logout.php"><?php echo"$user_name>>Logout"?></a>
                <a href="spin.html">Gift card</a><a class="a1" href="showfiles.php">My uploads</a><a class="a1" href="add.php">upload</a>
            </nav>
        </div>
        <div class="s2">
            <img src="logo.png">
            <nav class="nav2">
                <a href="">ABOUT US</a>
                <a href="magazineboot.html">MAGAZINES</a>
                <a href="">STORIES</a>
                <a href="">NEWSPAPERS</a>
                <a href="change.php">CHANGE PASSWORD</a>

            </nav>
            <form action="search.php" method="post">
                <input type="text" name="search" placeholder="Search Stories,Magazines,Topics & more ">
                <input type="submit" class="searchbtn" name="searchbtn" value="search">
            </form>
        </div>
        <br>
        <div class="s3">
            <iframe src="slide.html" width=100% height="100%"></iframe>
        </div>
        <br>
        <div class="magazine-row">
            <h3>Trending</h3>
            <table>
                <tr>
                    <td><a href="index3.html"><img src="s1.png"></a></td>
                    <td><a href=""><img src="s2.png "></a></td>
                    <td><a href=""><img src="s5.png "></a></td>
                    <td><a href=""><img src="s7.png "></a>
                    </td>
                    <td><a href=""><img src="s12.png "></a></td>
                </tr>
            </table>
        </div>
        <div class="magazine-row">
            <h3>International</h3>
            <table>
                <tr>
                    <td><a href=""><img src="s9.png"></a></td>
                    <td><a href=""><img src="s3.png "></a></td>
                    <td><a href=""><img src="s4.png "></a></td>
                    <td><a href=""><img src="s6.png "></a>
                    </td>
                    <td><a href=""><img src="s11.png "></a></td>
                </tr>
            </table>
        </div>
        <div class="magazine-row">
            <h3>Sports</h3>
            <table>
                <tr>
                    <td><a href=""><img src="s8.png"></a></td>
                    <td><a href=""><img src="s14.png "></a></td>
                    <td><a href=""><img src="s13.png "></a></td>
                    <td><a href=""><img src="s.jpg "></a>
                    </td>
                    <td><a href=""><img src="s10.png "></a></td>
                </tr>
            </table>
        </div>




    </div>
</body>

</html>