<?php get_header() ?>

    <?php if (function_exists('yoast_breadcrumb')) { yoast_breadcrumb('<p>', '</p>'); } ?>

    <h1><?php single_cat_title( ) ?></h1>

    <?php get_template_part( 'news' ) ?>

    <?php get_template_part( 'sidebar-category' ) ?>

    <?php get_template_part( 'sidebar-facebook' ) ?>

<?php get_footer() ?>