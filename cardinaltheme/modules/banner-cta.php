<section class="section section--banner-cta full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
    <div class="white-gradient mobile-only"></div>
    <div class="section-wrapper">
        <div class="two-col">
            <div class="col">
            </div>
            <div class="col">
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

                <?php $button = get_sub_field('button');
                    if( $button ): 
                    $button_url = $button['url'];
                    $button_title = $button['title'];
                    $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                <div class="button-wrapper">       
                    <a class="btn btn-secondary" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>     
                </div>  
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>