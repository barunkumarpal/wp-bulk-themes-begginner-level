<?php
get_header();



if(have_posts()){
    while(have_posts()){
        the_post();
        
      
        
        ?>

<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<p><?php the_time('F j, Y g:i:a');?>
 <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
    Posted in <?php echo get_the_category_list(',');?>
 </p>

<article class="post-content">
        <?php the_content();?>

        </article>
   <?php  }
}

get_footer();?>