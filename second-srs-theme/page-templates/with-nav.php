<?php 

/* 

Template Name: With Navbar

*/
get_header();?>

<body <?php body_class(); ?>>
<div class="max-w-[1280px]">
    <?php
    while(have_posts()){
        the_post();?>

        <div>
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
</div>
    
</body>


<?php get_footer() ?>