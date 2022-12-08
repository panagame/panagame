<?php
    session_start();
    include ("../connect.php");
    include ("../init.php");
?>
<!DOCTYPE html>
<html  <?= (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') ? 'dir="rtl"' : 'dir="ltr"'; ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://thenounproject.com/search/icons/?iconspage=1&q=ironing" rel="stylesheet">
    <title> To Do Laundry <?= (isset($page_title)) ? " - ".$page_title:"";  ?> </title>

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" >
    <link href="../css/all.min.css" rel="stylesheet" type="text/css" >
    <style>
        body {
            background: #f6f6f6;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .body_bg {
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            display: block;
            bottom: 0;
        }

        img:hover {
            opacity: 0.5;
        }

        element.style {
        }
        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
        }
        .btn-primary {
            color: #fff;
            background-color: #e89f58;
            border-color: #e89f58;
        }

        .btn-primary:hover{
            background: #08b0d6;
            border-color: #08b0d6;
        }

        label{
            font-weight: bold;
        }

        .card-header {
            background-color: #e89f58;
            color: #ffffff;
        }
        a{
            color: #08b0d6;
        }
        a:hover{
            color: #e89f58;
        }
        .card{
            border: 1px solid #e89f58 !important;
        }

        .services img{
            height: 50px;
            margin-bottom: 10px;
            color: #08b0d6;
        }

        .services .card{
            background-color: transparent;
        }

        h2, .h2{
            color: #08b0d6 !important;
        }

        h3, .h3{
            color: white !important;
        }

        h2, .h2{
            color: #08b0d6 !important;
        }

        .logo{
            height: 150px;
        }

        .C{
            color: #08b0d6;
        }

        .C{
            color: #08b0d6;
        }

        .card, .s{
            margin-bottom: 20px;
        }

        .C{
            color: #08b0d6;
        }

        <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar'){ ?>
        body{
            direction: rtl;
            text-align: right;
        }

        <?php } ?>
    </style>
</head>

<body>

    <div class="container">
        <div class="row" style="margin-top: 50px;" >
            <div class="col-md-12 m-auto text-center">
                <p><img class="logo" src="../image/logo.png" ></p>
                <?php
                if(isset($_SESSION['laundryworker_id'])){

                    $id = $_SESSION['laundryworker_id'];
                    $getUser = $db->query("SELECT * FROM laundryworker WHERE id='$id'");
                    $info = $getUser->fetch();

                    if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') {
                        echo 'مرحبا بك ' . " \" " . $info['nameOflaundryworker_ar'] . " \" ";
                    } else{
                        echo ' Welcome ' . " \" " . $info['NameOfLaundryWorker'] . " \" ";
                    }
                }
                ?>
                <br>
                <br>

                <b><a href="index.php" class="btn btn-primary"> <?= $t['home_page'] ?> </a></b>
                <b><a href="LaundryWorkerProfilePage.php" class="btn btn-primary"> <?= $t['My_Profile'] ?> </a></b>

                <b><a href="Showorders.php" class="btn btn-primary"> <?= $t['Show_Orders'] ?> </a></b>
                <b><a href="editProfile.php" class="btn btn-primary"> <?= $t['Edit_My_Profile'] ?> </a></b>
                <b><a href="LWlogout.php" class="btn btn-primary" > <?= $t['Log_out'] ?> </a></b>

                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar'){ ?>
                    <b><a href="../lang.php?lang=en&redirect=<?=  $_SERVER['REQUEST_URI'] ?>" class="btn btn-primary" > English </a></b>
                <?php }else{ ?>
                    <a href="../lang.php?lang=ar&redirect=<?=  $_SERVER['REQUEST_URI'] ?>" class="btn btn-primary"> العربية </a>
                <?php } ?>

            </div>
        </div>
    </div>
