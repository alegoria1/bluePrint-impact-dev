<!-- Full Page Intro -->
<div class="view">
    <div class="container-fluid p-0 m-0 w-100 h-100" style="z-index: -1;">
        <?php if (has_post_thumbnail()) {
        ?>
            <div class="p-0 d-flex align-items-center justify-content-center mb-1 mb-md-4 w-100 h-100" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-size: 100%; background-position: center; background-repeat: no-repeat;">
            </div>
        <?php
        } else if (!has_post_thumbnail() && !is_front_page()) {
        ?>
            <div class="p-0 d-flex align-items-center justify-content-center mb-1 mb-md-4 w-100 h-100" style="background:#3d404f">
            </div>
        <?php
        } ?>
    </div>
    
</div>
<!-- Full Page Intro -->