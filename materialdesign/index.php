<?php 
get_header();
?>

<!--NAVBAR-->
<nav id="nav" class="light-blue darken-4 z-depth-3">
    <div class="containernav">
        <div class="nav-wrapper">
        <a href="<?php echo home_url(); ?>" class="brand-logo white-text">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">   
            <li><a class="white-text" href="<?php bloginfo('template_url'); ?>/page.php">Projekte</a></li>
            <li><a class="white-text" href="badges.html">Über Uns</a></li>
            <li><a class="white-text" href="collapsible.html">Kontakt</a></li>
        </ul>
        </div>
    </div>
</nav>    

<!--TITELBILD-->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/assets/images/desk_darken.jpg">
    </div>
    <div>
    <div id="headline" class="caption center-align">
      <h3 id="headline-text" class="white-text light">PhysikOnline Blog</h3>
      <h5 class="light grey-text text-lighten-3">Alles rund um unsere Projekte, wer wir sind und was wir vorhaben.</h5>
    </div>
    </div>
</div>


 <!--MAIN-->       
<div class="section blue-grey lighten-5">
<br><br>
<div class="divider"></div>
    <div class="row container">
    <br>    <br>
    <div class="row">
     
    <div id="Main" class="col m9">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
<!-- CARD     -->
    <div class="card horizontal" >
        <div class="card-image">
         <img id="card-img" src="
          <?php if ( has_post_thumbnail() )
            echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) )
            ?>
            ">
        </div>
        <div class="card-stacked" >
        <div class="card-content">
            <h4 class="light"> 
            <?php the_title(); ?>
            </h4>
          <span class="light">
          <?php the_content(); ?>
          <br><br>
          <a href="<?php the_permalink()?>"> mehr.. </a>
          </span>
        </div>
        </div>
      </div>
     <?php get_the_tags(); ?>       
     <?php endwhile; endif; ?>  
    </div> 
<!-- CARD -->


     <!--SIDEBAR-->
     <?php get_sidebar() ?>
 
</div>        
</div>
</div>
</div>



<!-- FOOTER -->
      
 <footer id="Footer" class="page-footer light-blue darken-4">
      <div class="footer-copyright">
        <div class="container">
            © 2017 PhysikOnline
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            <ul>
            <li><a href="#">Impressum</a></li>
            <li><a href="#">Datenschutz</a></li>
            <li><a href="#">Kontakt</a></li>
            </ul>
        </div>
      </div>
</footer>        

<?php get_footer(); ?>
