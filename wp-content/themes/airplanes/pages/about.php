<?php /* Template Name: about */ ?>

<?php get_header() ?>

<div class="Banner Banner--blue Banner--image" style="background-image:url(<?php bloginfo('template_directory') ?>/img/runway.jpg">
    <div class="container">
        <h2 class="Banner-title Banner-title--big">About Us</h2>    
        <div class="Banner-body">
            <div class="text-group">
                <p class="title">Our Team</p>
                <p>Jim Cardella and Collin McIntyre represent 70 years of sales experience combined and have 
                facilitated the sales of over 3000 aircraft in the past 50 years.</p>    
            </div>
            <div class="text-group">
                <p class="title">Values</p>
                <p>Excellent service is our goal. Professionalism and integrity is our character. Attention to detail is
                our trademark. Fulfilling our client's needs is our passion.</p>    
            </div>
            <div class="text-group">
                <p class="title">Our Mission</p>
                <p>To expertly utilize our extensive knowledge in the field of General Aviation and use our diverse pool of resources; to guide our clients through
                the exciting and unique experience of obtaining their ideal ownership opportunity.</p>    
            </div>
            <div class="text-group">
                <p class="title">Our Service</p>
                <p>SDAS provides a wide spectrum of General Aviation services to assist you in all your buying, selling, and maintenance needs.</p>    
            </div>
            <div class="text-group">
                <p class="title">Our Offices</p>
                <p>San Diego Aircraft Sales is conveniently located at Gillespie Field, in El Cajon, California. Our offices are easily accessible from San Diego, Lindberg Field (SAN), and a short hop from Los Angeles (LAX);</p>
                <p>We cordially invite you to visit our comfortable, newly remodeled office.</p>                
            </div>        
            <div class="Button Button--red">Make an Appointment</div>
        </div>
    </div>
</div>
<div class="Banner Banner--default">
    <div class="container">
        <div class="Banner-title">Our Team</div>
        <div>
            <?php 
                $query = new WP_Query(array('post_type' => 'team-member'));

                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post()
             ?>
            <div class="Bio">
                <div class="Bio-leftContainer">
                    <div class="Bio-image square" style="background-image:url(<?php the_field('image') ?>"></div>
                </div>
                <div class="Bio-rightContainer">
                    <div class="Bio-text">
                        <h2 class="Bio-name"><?php the_field('name') ?></h2>
                        <?php the_field('bio') ?>
                    </div>
                </div>
            </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer() ?>