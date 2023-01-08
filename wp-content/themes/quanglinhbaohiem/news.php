
<!-- https://huykira.net/webmaster/wordpress/code-hay-lap-trinh-theme-wordpress.html -->
<!-- Bỏ vào Home sẽ lấy ra bài viết mới nhất
Bỏ vào Cate sẽ lấy ra bài viết mới nhất của cate đó
Bỏ vào Single sẽ lấy ra bài viết chi tiết -->
<!-- https://huykira.net/webmaster/wordpress/hinh-dai-dien-thumbnail-trong-wordpress.html -->

<!-- <h3>Bài viết mới nhất</h3> -->
<!-- Get post mặt định -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?></a>
		<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
		<div class="meta-post">
			<span>Ngày đăng: <?php echo get_the_date('d/m/Y') ?></span>
			<span>Lượt xem: <?php echo getPostView(get_the_id()) ?> lượt</span>
		</div>
		<?php the_excerpt( ) ?>
    <?php endwhile; else : ?>
        <p>Không có</p>
<?php endif; ?>
<!-- Get post mặt định -->
<?php if (paginate_links() != '') {?>
	<div class="pagination">
		<?php
		global $wp_query;
		$big = 999999999;
		echo paginate_links( array(
			'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' 		=> '?paged=%#%',
			'prev_text'    	=> __('«'),
			'next_text'    	=> __('»'),
			'current' 		=> max( 1, get_query_var('paged') ),
			'total' 		=> $wp_query -> max_num_pages
			) );
		?>
	</div>
<?php } ?>

<!-- 0373215865 -->