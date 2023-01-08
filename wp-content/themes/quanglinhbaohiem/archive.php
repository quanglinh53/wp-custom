<?php get_header() ?>

    <h1><?php the_archive_title() ?></h1>

    <?php get_template_part( 'news' ) ?>
    
    <?php get_template_part( 'sidebar-category' ) ?>

    <?php get_template_part( 'sidebar-facebook' ) ?>

<?php get_footer() ?>