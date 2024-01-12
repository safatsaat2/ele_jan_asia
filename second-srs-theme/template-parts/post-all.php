<?php

/* 

Template Name: All Posts

*/

    while(have_posts()){
        the_post();?>
<a class="bg-[#091035] text-center grid justify-center rounded-lg shadow-xl shadow-cyan-500/50 py-5" href=<?php the_permalink(); ?>>
<div class="px-4" >
            <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail("post_img", array("class" => "mx-auto"));
            }
            ?>
            <p class="my-4 text-2xl px-4">
                <?php the_title(); ?>
            </p>

                <?php the_excerpt(); ?>

        </div></a>
        

<?php
    }
    ?>