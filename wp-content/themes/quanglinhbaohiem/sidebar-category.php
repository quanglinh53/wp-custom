
<!-- https://huykira.net/webmaster/wordpress/lay-danh-muc-trong-wordpress-get-category.html -->

<!-- <h3>Tất cả danh mục</h3> -->
<ul>
    <?php
    $args = array(
        'child_of'      => 0,
        'orderby'       => 'id',
    );
    $categories = get_categories( $args );
    foreach ( $categories as $category ) { ?>
        <li>
        <a href="<?php echo get_term_link($category -> slug, 'category');?>">
            <?php echo $category -> name ; ?>
            (<?php echo $category -> count; ?>)
        </a>
        </li>
    <?php } ?>
</ul>