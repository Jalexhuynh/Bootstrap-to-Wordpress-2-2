<?php 
/* Template Name: Full Width Template */

$thumbnail_url          = wp_get_attachment_url( get_post_thumbnail_id( $post ) );

get_header();
?>

<!-- FEATURE IMAGE
================================================== -->

<?php if( has_post_thumbnail() ) { ?>
    
    <section class="feature-image" style="background: url('<?php echo $thumbnail_url?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
        <h1><?php the_title(); ?></h1>
    </section>

<?php } else { ?>

    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1><?php the_title(); ?></h1>
    </section>

<?php } ?>

<!-- MAIN CONTENT
================================================== -->
<div class="container">
    <div class="row" id="primary">
    
        <div id="content" class="col-sm-12">
            
            <section class="main-content">

                <?php while ( have_posts() ) : the_post();
                
                    the_content();

                endwhile; ?>

            </section>
            
        </div><!-- content -->
                
    </div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>