<?php 

get_header();



// $args = array(
//     'post_type' => 'post'
// );

// $signlepost = new WP_Query($args);

if(have_posts()){
    while(have_posts()){
        the_post();
        
        $post_ID =  get_the_ID();?>





<h2 class="page-heading"><?php the_title();?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
            Posted by <?php the_author();?> on <?php the_time('F j, Y');
            
            if(get_post_type()=='post'){?> in
            <a href="#"><?php echo get_the_category_list(',');?> Category</a>

            <?php }?>
          </div>
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
          </div>
          <div class="card-description">
            <h3>The Introduction</h3>
            <?php the_content();



$fields =  array(

  'author' =>
    '<p>'.'<input id="author" placeholder="Your Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></p>',

  'email' =>
  '<p>'.'<input id="email" placeholder="Your Email ID" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>', 
);

$args = array(
   'title_reply' => 'Share Your Thoughts',
   'fields' => $fields,
   'comment_field' => '<textarea placeholder="Your Comment" id="comment" name="comment" aria-required="true">'.'</textarea>',
   'comment_notes_before' => '<p class="comment-notes">' .
    __( 'Your email address will not be published. All fields are required' ) .
    '</p>',

);





            
                comment_form($args);
                
                $comment_number = get_comments_number();
                if($comment_number != 0){?>

                    <h3>What others say</h3>
                    <ol class="all-comments">
                        <?php
                        $comments = get_comments(
                                                    array(
                                                        'post_id' => $post_ID,
                                                        'status' => 'approve'
                                                    )
                                    );

                        wp_list_comments(
                            array(
                                'per_page' => '15'
                            ), $comments
                        );
                        
                        ?>
                    </ol>

                <?php }?>
          </div>
        </div>

        <!-- <div id="comments-section">
          Comments Section
        </div> -->
      </section>

      <?php
      
            }
        }
      ?>

      <aside id="sidebar">
        <?php dynamic_sidebar('main_sidebar');?>
      </aside>
    </div>


<?php    


get_footer();

?>