<?php
// get the current taxonomy term
$term = get_queried_object();
// vars
$imageCat = get_field('image_category', $term);

?>
<!-- Full Page Intro -->
<div class="view">
    <div class="container-fluid p-0 m-0 w-100 h-100" style="z-index: -1;">
        <?php if (!empty ($imageCat['url'])) {
        ?>
            <div class="p-0 d-flex align-items-center justify-content-center mb-1 mb-md-4 w-100 h-100" style="background-image: url('<?php  echo $imageCat['url']; ?>'); background-size: 100%; background-position: center; background-repeat: no-repeat;">
            </div>
        <?php
        } else {
        ?>
            <div class="p-0 d-flex align-items-center justify-content-center mb-1 mb-md-4 w-100 h-100" style="background:#3d404f">
            </div>
        <?php
        } ?>
    </div>
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-block d-md-flex align-items-center">
        <!-- Content -->
        <div class="container px-md-3 px-sm-0">
            <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                    <?php
                    get_template_part('template-parts/navigation/nav-1');
                    ?>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->