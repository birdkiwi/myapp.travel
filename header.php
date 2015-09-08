<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MyApp.travel</title>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="build/style.min.css">
</head>

<body data-btn-up>

<header class="main-header">
    <div class="wrapper">
        <a href="#" class="main-header-toggler-wrap" data-offcanvas>
            <span class="main-header-toggler"></span>
        </a>

        <div class="main-header-logo">
            <a href="index.php">
                <?php include("images/svg/logo.svg"); ?>
            </a>
        </div>
        <ul class="main-header-menu">
            <li><a class="active" href="index.php">Старт</a></li>
            <li><a href="agencies.php">Турагентствам</a></li>
            <li><a href="operators.php">Туроператорам</a></li>
            <li><a href="#">О проекте</a></li>
            <li><a href="prices.php">Цены</a></li>
        </ul>
        <div class="main-header-user">
            <a href="#login-modal" data-toggle="modal">Войти</a>
        </div>
    </div>
</header>

<div class="main-offcanvas">
    <div class="main-offcanvas-content">
        <nav>
            <ul>
                <li><a href="index.php">Старт</a></li>
                <li><a href="agencies.php">Турагентствам</a></li>
                <li><a href="operators.php">Туроператорам</a></li>
                <li><a href="about.php">О проекте</a></li>
                <li><a href="prices.php">Цены</a></li>
            </ul>
        </nav>
    </div>
</div>

<?php include_once("login-modal.php"); ?>

<?php include_once("app-build-modal-1.php"); ?>
<?php include_once("app-build-modal-2.php"); ?>
<?php include_once("app-build-modal-3.php"); ?>
<?php include_once("app-build-modal-4.php"); ?>
<?php include_once("app-build-modal-5.php"); ?>
