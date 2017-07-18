<!-- Sidebar -->
<div id="Sidebar" class="col m3">
    <div class="card">
        <div class="card-content">
            <p>
            <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
               <input class="waves-effect waves-teal btn-flat" type="submit" id="search_submit" value="Suchen" />
            </form>
            </p>
            <br><br>
            <div class="divider"></div> 
            <br><br>
            <span class="card-title">Tags</span>
            <?php the_tags( '<div class="chip">','</div><div class="chip">','</div>' ); ?>
            <br><br>

        </div>
    </div>
</div>
<!-- Sidebar End -->