<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title();?></title>

    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class="site_header">
 <h2><a href="<?php echo site_url();?>"><?php bloginfo('name');?></a></h2>
 <h4><?php bloginfo('description');
    if(is_page('contact-us')){?>
        <br>Home/<?php the_title();
    }?></h4>

 <nav class="site-nav">
     <?php wp_nav_menu(
         array(
             'theme_location' => 'primary'
         )
     );
     
     
    //  wp_list_pages(
    //     array(
    //         'child_of' => $post->Id,
    //         'title_li' => ''
    //     )
    // );

    get_search_form();
    
    ?>
 </nav>
</header>
    



















