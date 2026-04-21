<!DOCTYPE html>
<html>
 <head>
    <?php wp_head(); ?>
   <title><?php bloginfo('name'); ?></title>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
 </head>
 <body>
    <script src="https://code.jquery.com/jquery-4.0.0.js"></script>
<header id="top">
    <div class="menu">
        <h1><a href="index.html">ink and line</a></h1>
        <nav>
            <ul>
                <li><a href="<?php echo home_url('/'); ?>#news">NEWS</a></li>
                <li><a href="<?php echo home_url('/'); ?>#about">ABOUT</a></li>
                <li><a href="<?php echo home_url('/'); ?>#business">BUSINESS</a></li>
                <li><a href="<?php echo home_url('/'); ?>#company">COMPANY</a></li>
                <li><a href="<?php echo home_url('/'); ?>#works">WORKS</a></li>
            </ul>
        </nav>
    </div>
    <div class="contact">
        <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
    </div>
</header>