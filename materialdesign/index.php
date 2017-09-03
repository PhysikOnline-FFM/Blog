<?php 
get_header();
?>

<!--NAVBAR-->
<nav id="nav" class="light-blue darken-4 z-depth-3">
    <div class="containernav">
        <div class="nav-wrapper">
        <a href="<?php echo home_url(); ?>" class="brand-logo white-text">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down"> 
            <?php 
            $args = array(
                'title_li'        => 0,
            ); 

            wp_list_pages( $args ); ?>

        </ul>
        </div>
    </div>
</nav>    
<!--END NAVBAR-->

<!--TITELBILD-->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/assets/images/UD4-1.jpg">
    </div>
    <div>
    <div id="headline" class="caption center-align">
      <h2 id="headline-text" class="white-text light">PhysikOnline Blog</h2>
      <h5 class="light grey-text text-lighten-3">Alles rund um unsere Projekte, wer wir sind und was wir vorhaben.</h5>
    </div>
    </div>
</div>
<!--END TITELBILD-->



 <!--MAIN-->       
<div class="section grey lighten-3">

<!-- HIGHLIGHTS -->
    <!-- <div class="row wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="images/sample-1.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
    </div> -->
<!-- END HIGHLIGHTS -->

<!-- 
<div class="divider"></div> -->
<div class="row wrapper">   
<div class="section-headline" > 
<h3 class="thin">
Neueste Beiträge
</h3>
</div> 
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
    <!-- END CARD -->
     <?php get_the_tags(); ?>       
     <?php endwhile; endif; ?>  
</div> 
<!-- END MAIN -->

<!--SIDEBAR-->
<?php get_sidebar() ?>
 
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
