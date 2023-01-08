
<!-- https://huykira.net/webmaster/wordpress/code-hay-lap-trinh-theme-wordpress.html -->
<!-- 1.Code lấy bài viết mặt định. -->
<!-- https://developers.facebook.com/docs/plugins/like-button -->

<!-- Get post mặt định -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <?php setPostView(get_the_id()) ?>
    <h1 class="post-title"><?php the_title() ?></h1>
    <div class="post-meta">
        <span>Ngày đăng: <?php echo get_the_date('d/m/Y') ?></span>
        <span>Tác giả: <?php the_author( ) ?></span>
        <span>Chuyên mục: <?php the_category(', ') ?></span>
        <span>Lượt xem: <?php echo getPostView(get_the_id()) ?> lượt</span>
    </div>
    <article class="post-content">
        <?php the_content() ?>
    </article>
    <div class="post-tag">
        <p><?php the_tags('Từ khóa: ') ?></p>
    </div>
    <div class="post-like">
        <div class="fb-like" data-href="<?php the_permalink() ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
    </div>
    <div class="post-comment">
        <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5"></div>
    </div>
    
<?php endwhile; else : ?>
<p>Không có</p>
<?php endif; ?>
<!-- Get post mặt định -->

<!-- 11.Code bài viết liên quan -->
<!-- Hiển thị vài viết liên quan theo category -->
<?php
    $categories = get_the_category(get_the_id()); // get post ID
    if ($categories) 
    {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category -> term_id;
 
        $args = array(
            'category__in'      => $category_ids,
            'post__not_in'      => array(get_the_id()), // get post ID
            'showposts'         => 5, // Số bài viết bạn muốn hiển thị.
            'caller_get_posts'  => 1
        );
        $my_query = new wp_query($args);
        if ( $my_query -> have_posts() ) {
            echo '<h3>Bài viết liên quan</h3><ul class="list-news">';
            while ($my_query -> have_posts())
            {
                $my_query -> the_post();
                ?>
                <li>
                	<div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(85, 75)); ?></a></div>
                	<div class="item-list">
                		<h4>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="meta-list">
                            <span>Ngày đăng: <?php echo get_the_date('d/m/Y') ?></span>
                        </div>
                		<?php the_excerpt(); ?>
                	</div>
                </li>
                <?php
            }
            echo '</ul>';
        }
    }
?>