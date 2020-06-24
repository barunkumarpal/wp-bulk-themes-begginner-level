<?php get_header();

if(have_posts()){
    while(have_posts()){
        the_post();

        ?> <a href="<?php the_permalink();?>"><?php the_title(); ?></a><?php

        the_excerpt();
        
    }
}
the_content();



get_footer();?>