<?php 	
	error_reporting(0);
	include 'database/Connection.php';
	include 'database/Session.php';
    Session::checkSession();
?>

<! DOCTYPE html>
    <html lang="en">

    <head>
        <title>Mess Arrangement</title>
        <link rel="icon" href="img/logo.jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- for fontawesome -->

        <style>
        .nav1 {
            width: 67%;
            float: left;
            padding-top: 0px;

        }

        .nav5 {
            width: 8%;
            float: right;
            text-align: left;
            padding-top: 2rem;
            color: #f78f8f;
        }

        .nav2 a:hover {
            color: red;
            font-size: 115%;
        }

        .nav3 a:hover {
            color: red;
            font-size: 115%;
        }

        .nav4 a:hover {
            color: red;
            font-size: 115%;
        }

        .nav5 a:hover {
            color: red;
            font-size: 115%;
        }

        @media only screen and (max-width: 700px) {
            .nav1 {
                width: 27%;
            }

            .nav2 {
                width: 19%;
            }

            .nav3 {
                width: 20%;
            }

            .nav4 {
                width: 17%;
            }

            .nav5 {
                width: 17%;
            }
        }

        .navbar:after {
            content: '';
            display: table;
            clear: both;
        }

        .container {
            background-color: #faf3e6;
            height: 100%;
        }

        .child {
            margin-left: 20%;
            padding-top: 5px;
        }

        .dv {
            display: flex;
            justify-content: center;
        }

        p {
            font-size: 23px;
            font-weight: bold;
        }

        .div1 {
            float: left;
            width: 20%;
            height: 220px;
            background-color: #3cb807;
            margin: 10px;
            text-align: center;
            position: relative;
        }

        @keyframes test1 {
            from {
                background-color: #3cb807;
            }

            to {
                background-color: #aef092;
            }
        }

        .div1 p {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        .div2 {
            float: left;
            width: 20%;
            height: 240px;
            background-color: #8cf5c7;
            padding-top: 30px;
            margin: 10px;
            position: relative;
        }

        @keyframes test2 {
            from {
                background-color: #8cf5c7;
            }

            to {
                background-color: #02c771;
            }
        }

        .div2 p {
            color: white;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        .div3 {
            float: left;
            width: 20%;
            height: 220px;
            background-color: #035394;
            margin: 10px;
            position: relative;
        }

        @keyframes test3 {
            from {
                background-color: #035394;
            }

            to {
                background-color: #91c7f2;
            }
        }

        .div3 p {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        @media only screen and (max-width: 700px) {
            .container {
                height: auto;
            }

            .dv {
                padding-left: 5%;
            }

            .div1 {
                width: 85%;
                height: 175px;
            }

            .div2 {
                margin-left: 6%;
                width: 72%;
                height: 175px;
            }

            .div3 {
                width: 85%;
                height: 175px;
            }

            .child {
                margin-left: 5%;
                width: auto;
            }
        }

        .container:after {
            content: '';
            display: table;
            clear: both;
        }

        .last {
            background-color: #fcf4d7;
            ;
        }

        .div4 {
            float: left;
            width: 25%;
            height: 220px;
            background-color: #61a2fa;
            position: relative;
            margin: 10px;

        }

        @keyframes test4 {
            from {
                background-color: #61a2fa;
            }

            to {
                background-color: #c8dcf7;
            }
        }

        .div4 p {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 37%;
            margin-right: -40%;
            transform: translate(-40%, -60%)
        }

        .div5 {
            float: left;
            width: 25%;
            height: 220px;
            background-color: #61a2fa;
            margin: 10px;
            position: relative;
        }

        @keyframes test5 {
            from {
                background-color: #61a2fa;
            }

            to {
                background-color: #c8dcf7;
            }
        }

        .div5 p {
            margin: 0;
            position: absolute;
            top: 55%;
            left: 44%;
            margin-right: -40%;
            transform: translate(-40%, -60%)
        }

        @media only screen and (max-width: 700px) {
            .last {
                height: auto;
            }

            .div4 {
                margin-left: 10%;
                margin-top: 5px;
                width: 72%;
                height: 175px;

            }

            .div5 {
                margin-top: 12px;
                margin-left: 6%;
                width: 85%;
                height: 175px;
            }
        }

        .last:after {
            content: '';
            display: table;
            clear: both;
        }

        /* footer starts from here  */
        .footer {
            background-color: #a8b072;
            color: white;
            padding: 10px;
            text-align: right;
            font-size: 15px;
            height: 39px;
            margin-top: 7px;

        }

        .notification {
            position: relative;
        }

        .notification .badge {
            position: absolute;
            top: -12px;
            right: 64px;
            padding: 5px 10px;
            border-radius: 50%;
            background-color: red;
            color: white;
        }

        .footer::after {
            display: table;
            content: '';
            clear: both;
        }

        img {
            border-radius: 20px;
            margin: 0.5rem
        }

        .icon {
            width: 100px;
            height: 100px;

            margin: 0 auto;
            display: block;
            padding-top: 10px;
            margin-top: -9px;
        }

        body {
            margin: 0;
        }
        </style>

    </head>

    <body>
        <div class="first">
        </div>

        <!-- navbar start here -->
        <div class="navbar">
            <div class="nav1">
                <a href="index.php"><img width="70px" height="70px" src="img/logo.png"></a>
            </div>
            <div class="nav5">
                <a href="logout.php" style="text-decoration:none;">
                    <i class="fa fa-power-off"></i>&nbsp <span style="color:#f78f8f;">Logout</span>
                </a>
            </div>

        </div>

        <div class="container">
            <div class="child">
                <h3 style="text-align: center;color:#99955f;height:50px;padding-top:13px;background:white;width:80%;">
                    Welcome To Automated Mess Management System
            </div>

            <div class="dv">
                <div class="div1">
                    <p> <a href="meal.php" style="text-decoration:none;color:black"><img class="icon"
                                src="img/meal.png"> Daily Meal Record</a> </p>
                </div>

            </div>
        </div>

    </body>

    </html>