<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamers Alley - Home</title>
    <?php wp_head(); ?>
</head>

<body>

<header>
    <nav class="navbar">
        <i class="fas fa-shopping-cart"></i>
        <p class="nav-title"><a href="index.html">Gamers Alley</a></p>
        <ul class="navbar-list">
            <li class="navbar-item"><a href="<?php echo site_url(); ?>" class="navbar-anchor">Home</a></li>
            <li class="navbar-item"><a href="<?php echo site_url("/products-page"); ?>" class="navbar-anchor">Products</a></li>
            <li class="navbar-item"><a href="search-page.html" class="navbar-anchor">Search</a></li>
            <li class="navbar-item"><a href="contact.html" class="navbar-anchor">Contact</a></li>
            <span class="navbar-login-container">
                <li class="navbar-item navbar-item__login"><a href="###" class="navbar-anchor navbar-anchor__login">Login</a></li>
                <li class="navbar-item navbar-item__signup"><a href="###" class="navbar-anchor navbar-anchor__signup">Signup</a></li>
            </span>
        </ul>
    </nav>
</header>