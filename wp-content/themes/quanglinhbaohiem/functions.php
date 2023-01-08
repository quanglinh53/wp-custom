
<!-- https://huykira.net/webmaster/wordpress/code-hay-lap-trinh-theme-wordpress.html -->
<!-- 12.Code tính lượt view cho bài viết -->

<?php

function wp_my_setup() {
    register_nav_menu('topMenu01',__( 'Main menu' ));
    add_theme_support( 'post-thumbnails' ); // https://huykira.net/webmaster/wordpress/hinh-dai-dien-thumbnail-trong-wordpress.html

    function setPostView($postID) {
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }

    function getPostView($postID) {
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
}

add_action('init', 'wp_my_setup');