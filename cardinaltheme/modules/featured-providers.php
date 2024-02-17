<section class="section section--featured-providers full-width" style="background-color: <?php echo the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field('id')?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <h4 class="subheading"><?php echo $subheading ?></h4>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb"><?php echo $blurb ?></div>
            <?php endif; ?> 

        </div>
        <div class="panels featured_provider_slider">
            <?php
            global $post;
            $backup = $post; 
            $the_query = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'providers',
                'orderby' => 'title',
                'order' => 'ASC'
            ));
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a class="panel" href="<?php the_permalink(); ?>">
                        <div class="background-image"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" /></div>
                            <div class="content-wrapper">
                                <h4 class="heading"><?php the_title(); ?></h4>
                                
                                <?php $specialty = get_field('provider_specialties_relationship');
                                if ($specialty) : ?>   
                                    <?php foreach ($specialty as $post) :
                                        setup_postdata($post); ?>
                                            <div class="specialty"><?php the_title(); ?></div>
                                    <?php endforeach;
                                wp_reset_postdata();  ?>
                                <?php endif; ?>

                                <div class="btn btn-secondary mobile-only">Read Biography</div>
                            </div>
                        
                    </a>  
                <?php endwhile; ?>
                <?php $the_query->reset_postdata(); 
                $post = $backup; ?>
            <?php else : ?>
                <p><?php __('No Locations Available'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>