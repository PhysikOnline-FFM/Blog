<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/materialize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>PhysikOnline Blog</title>

</head>

<body
<?php
    if (has_post_thumbnail()) {
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
         echo ' style="background: url('. $url.'); " '; }
    else {
        echo ' class="grey darken-4" ';
         }
?> >
<!-- NAVBAR -->    
<div id="Header">

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

</div>
<!--END NAVBAR-->

<?php the_post(); ?>




<div id="parent" class="white trans">             
    <div class="extrapadding" >
        <div class="container">
            <div class="card">
                <div class="article">
                    <h1 class="thin"><?php the_title(); ?></h1>
                    <div id="meta">
                    <span id="subtitle" class="thin small"> Von <?php the_author(); ?>, &emsp;  <i class="material-icons tiny thin">access_time</i>  <?php the_date('d.m.Y'); ?> </span>
                    </div>  
                    <span class="light"> 
                    <?php the_content(); ?> 
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>




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

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/ThatsNotYoChild.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/materialize.js"></script>
<script>$(document).ready(function(){
      $('.parallax').parallax();
    });
</script>


</body>


</html>