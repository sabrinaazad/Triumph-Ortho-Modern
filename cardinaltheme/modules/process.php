<section class="section section--process full-width" id="<?php echo the_sub_field("id");?>" style="background-color:<?php echo the_sub_field("background_color");?>">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field('subheading')) : ?><div class="subheading"><?php the_sub_field('subheading'); ?></div><?php endif; ?>
            <?php if (get_sub_field('heading')) : ?><h2 class="heading"><?php the_sub_field('heading'); ?></h2><?php endif; ?>
            <?php if (get_sub_field('blurb')) : ?><div class="blurb"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
        </div>
       
        <?php if (have_rows('box')) : ?>
            <div class="process-timeline process_slider">
                <?php while (have_rows('box')) : the_row(); ?>
                    <div class="process">
                        <div class="image-wrapper">
                            <img src="<?php the_sub_field('image'); ?>" alt="number icon">
                        </div>
                        <div class="text-wrapper">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <div><?php the_sub_field('blurb'); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>