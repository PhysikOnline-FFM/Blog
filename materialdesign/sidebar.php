<!-- Sidebar -->

<div id="Sidebar" class="col m3">
    <div class="card">
        <div class="card-content">
            <p>
            <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
               <input class="waves-effect waves-teal btn-flat center" type="submit" id="search_submit" value="Suchen" />
            </form>
            </p>
        </div>
    </div>
</div>

<div id="Sidebar" class="col m3">
    <div class="card">
        <div class="card-content">
            <span class="card-title">Tags</span>
            <?php the_tags( '<div class="chip">','</div><div class="chip">','</div>' ); ?>
            <br><br>
        </div>
    </div>
</div>


<!-- Sidebar End -->