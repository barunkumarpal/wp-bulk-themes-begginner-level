<?php
get_header();



if(have_posts()){
    while(have_posts()){
        the_post();?>

<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

<article class="post-content">
        <?php the_content();?>

        </article>
   <?php  }
}

get_footer();?>