<?php /* Template Name: contact */ ?>

<?php get_header() ?>

<div class="Banner Banner--blue">
    <div class="container">
        <h3 class="Banner-title Banner-title--big">Contact Us Today</h3>
        <div class="Banner-text">
            Whether you are looking to buy or sell, interested in plane maintenance or aquisitions, or
            would like to get in touch with us for any reason, we would love to hear from you! As you fill out the following contact form,
            be as detailed as possible and we will get back to you shortly.
        </div>
    </div>
</div>
<div class="Banner Banner--default">
    <div class="container">
        <div class="Form">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>    
        </div>
    </div>
</div>
<div class="Banner Banner--default">
    <div id="map"></div>
</div>

<?php get_footer() ?>