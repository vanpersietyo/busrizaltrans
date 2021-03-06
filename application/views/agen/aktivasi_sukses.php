<?php
/**
 * Created by PhpStorm.
 * User: tipk
 * Date: 01/11/2018
 * Time: 10:10
 */
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        padding: 0;
        margin: 0;
    }

    #notfound {
        position: relative;
        height: 100vh;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 710px;
        width: 100%;
        text-align: center;
        padding: 0px 15px;
        line-height: 1.4;
    }

    .notfound .notfound-404 {
        height: 200px;
        line-height: 200px;
    }

    .notfound .notfound-404 h1 {
        font-family: 'Fredoka One', cursive;
        font-size: 168px;
        margin: 0px;
        color: #038c25;
        text-transform: uppercase;
    }

    .notfound h2 {
        font-family: 'Raleway', sans-serif;
        font-size: 22px;
        font-weight: 400;
        text-transform: uppercase;
        color: #222;
        margin: 0;
    }

    .notfound-search {
        position: relative;
        padding-right: 123px;
        max-width: 420px;
        width: 100%;
        margin: 30px auto 22px;
    }

    .notfound-search input {
        font-family: 'Raleway', sans-serif;
        width: 100%;
        height: 40px;
        padding: 3px 15px;
        color: #222;
        font-size: 18px;
        background: #f8fafb;
        border: 1px solid rgba(34, 34, 34, 0.2);
        border-radius: 3px;
    }

    .notfound-search button {
        font-family: 'Raleway', sans-serif;
        position: absolute;
        right: 0px;
        top: 0px;
        width: 120px;
        height: 40px;
        text-align: center;
        border: none;
        background: #038c25;
        cursor: pointer;
        padding: 0;
        color: #fff;
        font-weight: 700;
        font-size: 18px;
        border-radius: 3px;
    }

    .notfound a {
        font-family: 'Raleway', sans-serif;
        display: inline-block;
        font-weight: 700;
        border-radius: 15px;
        text-decoration: none;
        color: #038c25;
    }

    .notfound a>.arrow {
        position: relative;
        top: -2px;
        border: solid #038c25;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
        -webkit-transform: rotate(135deg);
        -ms-transform: rotate(135deg);
        transform: rotate(135deg);
    }

    @media only screen and (max-width: 767px) {
        .notfound .notfound-404 {
            height: 122px;
            line-height: 122px;
        }
        .notfound .notfound-404 h1 {
            font-size: 122px;
        }
    }

</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Sukses</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?=site_url()?>assets/css/style.css" />


</head>

<body style="background: #cdffc4;">

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>Berhasil</h1>
        </div>
        <h2>Aktivasi sukses. Silahkan Login!</h2>

        <!--            <button onclick="goBack()" style="margin: 10px;"><span class="arrow"></span>Return To Homepage</button>-->
        <a href="<?=site_url('login.html')?>"  style="margin: 10px;"><span class="arrow"></span>Login</a>
    </div>
</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<script>
    function goBack() {
        window.history.back();
    }
</script>
