<!-- ========== HERO SECTION ========== -->
<section id="hero" data-type="background" data-speed="5">

<article>
    <div class="container clearfix">
        <div class="row">

            <div class="col-sm-5">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
            </div> <!-- col end -->
            <div class="col-sm-7 hero-text">
                <h1><?php bloginfo('name'); ?></h1>
                <p class="lead"><?php bloginfo('description'); ?></p>
                <div id="price-timeline">
                    <div class="price active">
                        <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                        <span><?php the_field( 'prelaunch_price' ); ?></span>
                    </div> <!-- price end -->
                    <div class="price active">
                        <h4>Launch Price <small>Coming soon!</small></h4>
                        <span><?php the_field( 'launch_price' ); ?></span>
                    </div> <!-- price end -->
                    <div class="price active">
                        <h4>Final Price <small>Coming soon!</small></h4>
                        <span><?php the_field( 'final_price' ); ?></span>
                    </div> <!-- price end -->
                </div> <!-- price-timeline end -->
                <p><a href="<?php the_field( 'course_url' ); ?>" class="btn btn-lg btn-danger" role="button"><?php the_field( 'button_text' ); ?> &raquo;</a></p>
            </div> <!-- col end -->

        </div> <!-- row end -->
    </div> <!-- container end -->
</article>

</section> <!-- hero end -->