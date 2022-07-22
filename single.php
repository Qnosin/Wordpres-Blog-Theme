<?php get_header(); ?>

        <?php
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <div class="articles1">
                <div class="thumbnail">
                    <?php the_post_thumbnail('medium_large'); ?>
                </div>
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
            <?php
            }
        }
        
        
        ?>

<div class="social">
            <div class="newsletter">
                <input type="text" placeholder="Email Newsletter" class="subscribeinput">
                <input type="submit" value="Submit" name="subscribe" class="subscribebutton">
            </div>
            <div class="networks">
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook_F_icon.svg.png"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Twitter-logo.svg.png"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Instagram_logo_2016.svg.webp"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/download.png"></a>
            </div>
        </div>

<?php get_footer(); ?>