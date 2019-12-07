<?php 

$features_section_image         = get_field( 'features_section_image');
$features_section_title         = get_field( 'features_section_title');
$features_section_body          = get_field( 'features_section_body');

?>

<!-- ========== COURSE FEATURES ========== -->
<section id="course-features">

    <div class="container">
        <div class="section-header">
            <!-- Checks if user uploaded an image -->
            <?php if ( $features_section_image ) : ?>
                <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>" />
            <?php endif; ?>

            <h2><?php echo $features_section_title ?></h2>

            <!-- Checks if user added body text -->
            <?php if ( $features_section_body ) : ?>
                <p class="lead"><?php echo $features_section_body ?></p>
            <?php endif; ?>

        </div> <!-- section-header end -->

        <div class="row">

            <!-- Creates loop to loop through custom post types and adds each feature's ACF fields -->
            <?php $loop = new WP_Query( array( 
                'post_type'     => 'course_feature', 
                'order_by'      => 'post_id', 
                'order'         => 'ASC' 
                ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class='col-sm-2'>
                    <i class="<?php the_field('course_feature_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div> <!-- col end -->

            <?php endwhile; wp_reset_query();?>

        </div> <!-- row end -->

    </div> <!-- container end -->

</section> <!-- course-features end -->