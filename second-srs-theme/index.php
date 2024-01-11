<?php get_header(); ?>

<body class="bg-[#000] text-white" <?php body_class(); ?>>

    <div class="max-w-[1480px] mx-auto">
    <div class="grid grid-cols-3 align-center justify-center gap-[40px]">
    <?php
    get_template_part("/template-parts/post-all"); ?>
    </div>
    </div>



    <?php get_footer(); ?>
</body>

</html>