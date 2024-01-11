<?php

/* 

Template Name: All Posts

*/

    while(have_posts()){
        the_post();?>

        <div class="bg-[#00008B] text-center grid items-center justify-center">
            <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail("post_img");
            }
            ?>
            <p>
                <?php the_title(); ?>
            </p>
            <p>
                <?php the_excerpt(); ?>
            </p>
        </div>

<?php
    }
    ?>