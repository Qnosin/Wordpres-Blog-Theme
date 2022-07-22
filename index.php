<?php get_header(); ?>
<div class="author">
            <div class="auther-image">
                <img src="https://images.unsplash.com/photo-1552664199-a1dcdd89aa05?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Author Name">
            </div>
            <div class="author-content">
                Lorem ipsum dolor sit amet,consectetur adipiscing elit. Duis aliquent diam sed lacus vehicula,sed porta purus blandit. Vivamus et tincidunt justo,non consequat nulla.
            </div>
        </div>

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

        <?php
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <div class="articles">
                <div class="thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?>
                    </p>
                    <a class="button" href="<?php the_permalink() ?>">More +</a>
                </div>
            </div>
            <?php
            }
        }
        
        
        ?>

<?php get_footer(); ?>