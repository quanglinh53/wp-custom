<?php get_header() ?>

    <form method="get" action="<?php bloginfo('url') ?>">
        <input class="form-control" type="text" name="s" placeholder="Từ khóa">
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php if (is_home()) { ?>
        <h1><?php bloginfo( 'name' ) ?></h1>
    <?php } ?>

    <?php get_template_part( 'post-standout' ) ?>
    
    <?php get_template_part( 'news' ) ?>

    <?php get_template_part( 'sidebar-category' ) ?>

    <?php get_template_part( 'sidebar-news' ) ?>

    <?php get_template_part( 'sidebar-facebook' ) ?>

<?php get_footer() ?>