<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <title>Document</title>
</head>
<body>
<header class="header">
    <nav>
        <div class="container d-flex ">
            <a href="<?=base_url()?>" ><div class="logo btn">SHOP</div></a>
            <div class="auth d-flex ">
                <input type="search" class="header-search" placeholder="search">
                <div class="cartImg">
                    <i class="fas cartImg fa-shopping-cart"></i>
                    <div class="cartImg-count"></div>
                </div>
                <?php if (!isset($_SESSION['user_ID'])): ?>
                    <a href="<?=base_url()?>login"><div class="login btn">Log In</div></a>
                    <a href="<?=base_url()?>signup"><div class="login btn">Sign Up</div></a>

                <?php else:?>
                    <a href="<?=base_url()?>cabinet" class="userInfo"><?=$userInfo['login']?><i class="fas fa-user"></i></a>
                   <a href="<?=base_url()?>logout"><div class="login btn">Log out</div></a>

                <?php endif; ?>
            </div>

        </div>
    </nav>
    <div class="cart text-right" >
        <div class="cart-content">
            <table class="cart-table table">
                <thead>
                <tr>
                    <td colspan="4" class="text-left">Your cart</td>
                </tr></thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <td class="text-right" colspan="3">total</td>
                    <td class="total text-center">0</td>
                </tr>
                </tfoot>
            </table>
            <button class="mr-5 order">order</button>
        </div>

    </div>
    <div class="serchContainer">
        <table class="search-table">
            <tbody></tbody>
        </table>
    </div>
</header>
<main class="content">
    <?php require_once("$content.php") ?>
</main>

<footer class="footer">
    some info in footer
</footer>
<script src="<?=base_url()?>assets/js/main.js"></script>
</body>
</html>