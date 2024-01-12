<?php get_header(); ?>

<body class="bg-[#020425]  text-white p-10" <?php body_class(); ?>>
<?php
    get_template_part("/template-parts/loader"); ?>
    <div id="content" class="max-w-[1480px] mx-auto">
    <div class="grid grid-cols-3 align-center justify-center gap-[40px]">
    <?php
    get_template_part("/template-parts/post-all"); ?>
    
    </div>
    </div>



    <?php get_footer(); ?>
</body>

</html>