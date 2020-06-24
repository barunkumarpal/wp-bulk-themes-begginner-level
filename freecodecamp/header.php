<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet"> -->
    
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>GTCoding</title>

    <?php wp_head();?>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="blogslist.html">Blog</a>
            </li>
            <li>
                <a href="blogslist.html">Projects</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
        <?php 
        //   if ( function_exists( 'the_custom_logo' ) ) {
        //     the_custom_logo();
        //    }



           $custom_logo_id = get_theme_mod( 'custom_logo' );

           
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

//print_r($logo);

if ( has_custom_logo() ) {?>
       <a href="<?php echo site_url();?>" ><img class="site-logo" src="<?php echo $logo['0'];?>"></a>

       <?php
} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}
            ?>
            <a href="<?php echo get_option("siteurl");?>">
            
                <!-- <img src="img/logo.png" alt="GTCoding Logo"> -->
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="index.html">Home</a>
            </li>
            <li>
                <a href="blogslist.html">Blog</a>
            </li>
            <li>
                <a href="blogslist.html">Projects</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>