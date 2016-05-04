<?php get_header() ?>

<div class="Jumbotron" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/plane.jpg)">
    <div class="container">
        <h2 class="Jumbotron-title Jumbotron-title--right">San Diego's Premiere Aircraft Center</h2>
        <p class="Jumbotron-subtitle Jumbotron-subtitle--right">Offering complete service from sales to repairs,<br>San Diego Aircraft Sales is your one stop shop for all things personal aircraft.</p>
        <div class="Jumbotron-action-container clearfix">
            <h2 class="Jumbotron-action-title">We want to buy your aircraft!</h2>
            <a href="/sales/sell"><div class="Button Button--red">Sell Us Your Plane</div></a>
        </div>
    </div>
</div>
<div class="Banner Banner--blue">
    <div class="container">
        <h2 class="Banner-title">What People are saying</h2>
        <div class="Banner-body slideshow-container">
            <div id="testimonialSlideshow">
                <?php 
                    $query = new WP_Query(array('post_type' => 'testimonial'));

                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post()
                 ?>
                <div>
                    <div class="Testimonial">
                        <div class="Testimonial-leftContainer">
                            <div class="Testimonial-photo" style="background-image:url(<?php the_field('image'); ?>)"></div>
                        </div>
                        <div class="Testimonial-rightContainer">
                            <p class="Testimonial-text"><?php the_content(); ?></p>
                            <p class="Testimonial-tag">- <?php the_field('name') ?> | <?php the_field('company') ?> | <?php the_field('location')  ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                </div>
            </div>    
        </div>
    </div>
</div>
<div class="Banner Banner--default">
    <div class="container">
        <h2 class="Banner-title">Featured Planes:</h2>
        <div class="Banner-body plane-list">

        <?php 
            $query = new WP_Query(array('post_type' => 'plane'));

            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post()
         ?>
            <div class="Card">
                <div class="Card-image" style="background-image:url(<?php the_field('featured_image') ?>)"></div>
                <div class="Card-body">
                    <h4 class="Card-title uppercase"><?php the_title(); ?></h4>
                    <div class="Card-info">
                        <p class="bold"><?php the_field('number'); ?> &bull; $<?php the_field('price') ?></p>
                        &nbsp;
                        <p><span class="bold">Info</span></p>
                        <p><?php the_field('description'); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>"><div class="Button Button--red">Learn More <i class="fa fa-info-circle"></i></div></a>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer() ?>