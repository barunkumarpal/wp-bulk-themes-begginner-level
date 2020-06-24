<?php
get_header();



// wp_list_pages(
//         array(
//             'child_of' => $post->ID,
//             'title_li' => ''
//         )
//     );

if(has_children() OR $post->post_parent > 0){
    
    echo "<h3>Child Pages</h3>";
?>


<span class="parent-link"><a href=""><?php echo get_the_title(get_top_ancestor_id());?></a></span>


<?php
wp_list_pages(
        array(
            'child_of' => get_top_ancestor_id(),
            'title_li' => ''
        )
    );

}
if(have_posts()){
    while(have_posts()){
        the_post();
        
      
        
        ?>

<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

<article class="post-content">
        <?php the_content();?>

        </article>
   <?php  }
}

get_footer();?>