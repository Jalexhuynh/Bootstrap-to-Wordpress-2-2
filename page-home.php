<?php
/*
    Template Name: Home Page
 */

$who_feature_image              = get_field( 'who_feature_image' );
$who_section_title              = get_field( 'who_section_title' );
$who_section_body               = get_field( 'who_section_body' );

$features_section_image         = get_field( 'features_section_image');
$features_section_title         = get_field( 'features_section_title');
$features_section_body          = get_field( 'features_section_body');

$project_feature_title          = get_field( 'project_feature_title' );
$project_feature_body           = get_field( 'project_feature_body' );

$instructor_section_title       = get_field ( 'instructor_section_title' );
$instructor_name                = get_field ( 'instructor_name' );
$bio_excerpt                    = get_field ( 'bio_excerpt' );
$full_bio                       = get_field ( 'full_bio' );
$twitter_username               = get_field ( 'twitter_username' );
$facebook_username              = get_field ( 'facebook_username' );
$google_plus_username           = get_field ( 'google_plus_username' );
$num_students                   = get_field ( 'num_students' );
$num_reviews                    = get_field ( 'num_reviews' );
$num_courses                    = get_field ( 'num_courses' );


get_header(); ?>

    <?php get_template_part( 'template-parts/content', 'hero' ); ?>

    <?php get_template_part( 'template-parts/content', 'optin' ); ?>

    <?php get_template_part( 'template-parts/content', 'content-boost' ); ?>

    <!-- ========== WHO BENEFITS ========== -->
    <section id="who-benefits">

        <div class="container">
            <div class="section-header">

                <!-- Checks if user uploaded an image -->
                <?php if ( $who_feature_image ) : ?>
                    <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>" />
                <?php endif; ?>

                <h2><?php echo $who_section_title ?></h2>
            </div> <!-- section-header end -->

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo $who_section_body ?>
                </div> <!-- col end-->
            </div> <!-- row end -->
        </div> <!-- container end -->

    </section> <!-- who-benefits end -->

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

                <?php endwhile; ?>

            </div> <!-- row end -->

        </div> <!-- container end -->

    </section> <!-- course-features end -->

    <!-- ========== PROJECT FEATURES ========== -->
	<section id="project-features">
        <div class="container">
        
            <h2><?php echo $project_feature_title ?></h2>
            <p class="lead"><?php echo $project_feature_body ?></p>
            
            <div class="row">

                <!-- Creates loop to loop through custom post types and adds each feature's ACF fields -->
                <?php $loop = new WP_Query( array( 
                    'post_type'     => 'project_feature', 
                    'order_by'      => 'post_id', 
                    'order'         => 'ASC' 
                    ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-sm-4">

                        <!-- Displays the featured image -->
                        <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div><!-- col -->

                <?php endwhile; ?>
                
            </div><!-- row -->
            
        </div><!-- container -->
    </section><!-- project-features -->
    
    <!-- ========== VIDEO FEATURES ========== -->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Watch the Course Introduction</h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
                </div><!-- end col -->
            </div><!-- row -->			
        </div><!-- container -->
    </section><!-- featurette -->

    <!-- ========== INSTRUCTOR SECTION ========== -->
	<section id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
                        </div><!-- end col -->

                        <div class="col-lg-4">
                            <?php if( $twitter_username ) : ?>
                                <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>
                            <?php if( $facebook_username ) : ?>
                                <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if( $google_plus_username ) : ?>
                                <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <?php endif; ?>
                        </div><!-- end col -->
                    
                    </div><!-- row -->
                    
                    <p class="lead"><?php echo $bio_excerpt; ?><p>
                    
                    <?php echo $full_bio; ?>
                    
                    <hr>
                    
                    <h3>The Numbers <small>They Don't Lie</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_students; ?>+ <span>students</span>
                                </div><!-- num-content -->
                            </div><!-- num -->
                        </div><!-- end col -->
                        
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_reviews; ?>+ <span>reviews</span>
                                </div><!-- num-content -->
                            </div><!-- num -->
                        </div><!-- end col -->
                        
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_courses; ?> <span>courses</span>
                                </div><!-- num-content -->
                            </div><!-- num -->
                        </div><!-- end col -->
                    </div><!-- row -->
                    
                </div><!-- end col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- instructor -->

    <!-- ========== TESTIMONIALS ========== -->
	<section id="kudos">
        <div class="container">
            <div class="row">
            
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What People Are Saying About Brad</h2>
                    
                    <!-- Creates loop to loop through custom post types -->
                    <?php $loop = new WP_Query( array( 
                        'post_type'     => 'testimonial', 
                        'order_by'      => 'post_id', 
                        'order'         => 'ASC' 
                        ) ); ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <!-- Displays the featured image -->
                            <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( array( 200, 200 ) );
                                }
                            ?>
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <blockquote>
                                <?php the_content(); ?>
                                <cite>&mdash; <?php the_title(); ?></cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div><!-- row -->

                    <?php endwhile; ?>
                    
                </div><!-- end col -->
                
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- kudos -->

<?php get_footer(); ?>
