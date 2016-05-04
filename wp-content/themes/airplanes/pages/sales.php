<?php /* Template Name: sales */ ?>

<?php get_header() ?>

<div class="Banner Banner--default">
    <div class="container">
        <div class="Banner-title Banner-title--big">Find your Wings!</div>
        <div class="Banner-body">
            <div class="sales-plane-list">
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
                            <a class="Button Button--red" href="<?php the_permalink(); ?>">Learn More <i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>    
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>