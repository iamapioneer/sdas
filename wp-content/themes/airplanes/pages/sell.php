<?php /* Template Name: sell */ ?>

<?php get_header(); ?>

<div class="Banner Banner--blue">
    <div class="container">
        <h2 class="Banner-title Banner-title--big">Sell Your Plane</h2>
        <div class="Banner-body Banner-body--centered">With over 3000 aircraft sold, you can trust us with your plane.</div>    
    </div>
</div>
<div class="Banner Banner--default">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>    
</div>

<?php get_footer(); ?>
