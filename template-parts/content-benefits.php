<?php 

$who_feature_image              = get_field( 'who_feature_image' );
$who_section_title              = get_field( 'who_section_title' );
$who_section_body               = get_field( 'who_section_body' );

?>

<!-- ========== WHO BENEFITS ========== -->
<section id="who-benefits">

    <div class="container">
        <div class="section-header">

            <!-- Checks if user uploaded an image -->
            <?php if ( $who_feature_image ) : ?>
                <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>" />
            <?php endif; ?>

            <h2><?php echo $who_section_title; ?></h2>
        </div> <!-- section-header end -->

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $who_section_body; ?>
            </div> <!-- col end-->
        </div> <!-- row end -->
    </div> <!-- container end -->

</section> <!-- who-benefits end -->