<?php get_header(); ?>
 
<!--NAVBAR-->
<nav id="nav" class="light-blue darken-4 z-depth-3">
    <div class="containernav">
        <div class="nav-wrapper">
        <a href="<?php echo home_url(); ?>" class="brand-logo white-text"><img class="responsive-img" src="<?php bloginfo( 'template_url')?>/assets/images/Logo-Klein.png" style="padding-left: 40px; padding-right: 40px;"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down"> 
            <?php 
            $args = array(
                'title_li' => 0,); 
            wp_list_pages( $args ); ?>

        </ul>
        </div>
    </div>
</nav>    
<!--END NAVBAR-->

   <div id="main">
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>
          
      <?php 
         /*
          * Kommentare sind auf Seiten deaktiviert. 
          * Möchtest du die Kommentarfunktion auf Seiten aktivieren, entferne einfach die beiden "//"-Zeichen vor "comments_template();"
          */
          
         //comments_template();
      ?>
             
   </div><!-- main -->

<footer id="Footer" class="page-footer light-blue darken-4">
      <div class="footer-copyright">
        <div class="footainer">
            © 2017 PhysikOnline
            <ul>
            <li><a href="<?php echo home_url(); ?>/wp-admin">Bearbeiten</a>
            </ul>
        </div>
      </div>
</footer>          
 
<?php get_footer(); ?>