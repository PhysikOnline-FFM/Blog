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
<div class="row wrap">
<div class="section-headline" > 
<h3 class="thin">
Highlights
</h3>
    <?php
    $args = array(
        'tag' => get_queried_object()->slug, // If permalink like example.com/tag/example-tag, etc.
        'posts_per_page' => -1,
        'tax_query' => array( 
            array(
                'taxonomy' => 'category', // Taxonomy, in my case I need default post categories
                'field'    => 'slug',
                'terms'    => 'highlight', // Your category slug (I have a category 'interior')
            ),
            ) 
    ); // Get all posts
    $posts_new = get_posts( $args );
    ?>
    <div class="col s12 m4">
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
</div>
</div>
</div>    

<div class="row wrap">   
<div class="section-headline" > 
<h3 class="thin">
Neueste Beiträge
</h3>
</div> 
<div id="Main" class="col s12 m12 l9">
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
        <div class="footainer">
            © 2017 PhysikOnline
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            <ul>
            <li><a href="#">Impressum</a></li>
            <li><a href="#">Datenschutz</a></li>
            <li><a href="#">Kontakt</a></li>
            </ul> -->
        </div>
      </div>
</footer>        

<?php get_footer(); ?>
