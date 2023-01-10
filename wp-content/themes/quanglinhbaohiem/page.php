<?php get_header() ?>

    <?php if (function_exists('yoast_breadcrumb')) { yoast_breadcrumb('<p>', '</p>'); } ?>

    <?php get_template_part( 'page-detail' ) ?>

    <?php get_template_part( 'sidebar-category' ) ?>

    <?php get_template_part( 'sidebar-facebook' ) ?>

<?php get_footer() ?>