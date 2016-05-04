<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="Plane">
    <div class="container">
        <div class="Plane-header">
            <a href="/sales"><div class="Button Button--default"><i class="fa fa-angle-left"></i> Back to Planes</div></a>            
            <div class="Plane-price">$<?php the_field('price') ?></div> 
            <div class="Plane-title"><?php the_title(); ?></div>
        </div>
        <div class="Plane-slideshow">
            <?php the_content(); ?>
        </div>
        <div class="Plane-info">
            <table>
                <tr>
                    <td>Plane</td>
                    <td><?php the_title(); ?></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><?php the_field('description'); ?></td>
                </tr>
                <tr>
                    <td>Serial Number</td>
                    <td><?php the_field('number') ?></td>
                </tr>
                <tr>
                    <td>Total Time</td>
                    <td><?php the_field('total_time') ?></td>
                </tr>
                <tr>
                    <td>Engine</td>
                    <td><?php the_field('engine') ?></td>
                </tr>
                <tr>
                    <td>Avionics</td>
                    <td><?php the_field('avionics') ?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>$<?php the_field('price') ?></td>
                </tr>
            </table>
        </div>
        <div class="Button Button--red">Make An Appointment</div> &nbsp;or&nbsp;
        <div class="Button Button--default">See More Planes</div>
    </div>

</div>

<?php endwhile; ?>
<?php get_footer(); ?>