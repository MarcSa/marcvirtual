<div class="sidebar nobottommargin col_last">
    <div class="sidebar-widgets-wrap">
        <?php 
            if ( is_active_sidebar( 'mv_sidebar' ) ) {
                dynamic_sidebar( 'mv_sidebar' );
            }
        ?>
    </div>
</div>