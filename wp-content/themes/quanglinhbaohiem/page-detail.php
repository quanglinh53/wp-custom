
<!-- https://huykira.net/webmaster/wordpress/code-hay-lap-trinh-theme-wordpress.html -->
<!-- 1.Code lấy bài viết mặt định. -->
<!-- https://developers.facebook.com/docs/plugins/like-button -->

<!-- Get post mặt định -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <?php setPostView(get_the_id()) ?>
    <h1 class="post-title"><?php the_title() ?></h1>
    <article class="post-content">
        <?php the_content() ?>
    </article>
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
