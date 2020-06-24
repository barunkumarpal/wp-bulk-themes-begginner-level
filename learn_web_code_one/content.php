<h2><a href="<?php the_permalink();?>"><?php the_title();?>

<div class="image-responsive" style="width: 200px; height: 200px;">
<?php the_post_thumbnail('medium');?>
</div>
</a></h2>

<article class="post-content">
        <?php echo get_the_excerpt();?>
        <a href="<?php the_permalink();?>">Read More</a>

        </article>