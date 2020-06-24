<footer>
 <p><?php bloginfo('name');?> &copy <?php echo date('Y');?></p>

 <nav class="site-nav">
     <?php wp_nav_menu();?>
 </nav>

</footer>
<?php 

wp_footer(
    array(
        'theme_location' => 'footer_menu'
    )
);
?>


</body>
</html>