<?php 
/* Template Name: Resources Page */ 

get_header();

$thumbnail_url          = wp_get_attachment_url( get_post_thumbnail_id( $post ) );

?>

<!-- FEATURE IMAGE
================================================== -->

<!-- Check for feature image -->
<?php if( has_post_thumbnail() ) { ?>

    <section class="feature-image" style="background: url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover" data-type="background" data-speed="2">
        <h1>Resources</h1>
    </section>

<!-- Use this static HTML fallback if no featured image is set -->
<?php } else { ?>

    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1>Resources</h1>
    </section>

<?php } ?>

<!-- MAIN CONTENT
================================================== -->
<div class="container">
    <div class="row" id="primary">
    
        <div id="content" class="col-sm-12">
            
            <section class="main-content">

                <!-- Starts the loop to display the content on resources page. -->
                <?php while ( have_posts() ) : the_post(); ?>
                
                    <?php the_content(); ?>

                    <?php $loop = new WP_Query( array( 
                        'post_type' => 'resource',
                        'orderby'   => 'post_id',
                        'order'     => 'ASC'
                        ) ); ?>

                <!-- Ends the loop -->
                <?php endwhile; ?>
                
                <hr>
                
                <div class="resource-row clearfix">

                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <!-- Must place the variable inside the loop since they were not getting passed in. Alternatively, one could simply have used "the_field()" instead of storing variables. -->
                    <?php 
                    $resource_image         = get_field('resource_image');
                    $resource_url           = get_field('resource_url');
                    $add_button             = get_field('add_button');
                    $button_text            = get_field('button_text');
                    ?>

                        <div class="resource">

                            <img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>">

                            <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>

                            <?php the_content(); ?>

                            <?php if( $button_text ) : ?>

                                <a href="<?php echo $resource_url ?>" class="btn btn-success"><?php echo $button_text ?></a>
                                
                            <?php endif; ?>
                            
                            </div>

                    <?php endwhile; ?>

                </div> <!-- end resource-row -->
            </section>
            
        </div><!-- content -->
                
    </div><!-- primary -->

</div><!-- container -->
<?php get_footer(); ?>