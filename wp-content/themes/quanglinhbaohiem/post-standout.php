<h2>Bài nổi bật 1</h2>
<!-- https://huykira.net/webmaster/wordpress/huong-dan-lay-bai-viet-trong-wordpress.html -->
<?php 
	$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
		'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
		'showposts' => 1, // số lượng bài viết
		'cat' => 10, // lấy bài viết trong chuyên mục có id là 1
	);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query -> in_the_loop = true; ?>
<?php while ($getposts -> have_posts()) : $getposts -> the_post(); ?>
    <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?></a>
    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
	<div class="meta-post">
		<span>Ngày đăng: <?php echo get_the_date('d/m/Y') ?></span>
		<span>Lượt xem: <?php echo getPostView(get_the_id()) ?> lượt</span>
	</div>
    <?php the_excerpt( ) ?>
<?php endwhile; wp_reset_postdata(); ?>

<h3>Bài nổi bật 2</h3>
<?php 
	$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
		'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
		'showposts' => 3, // số lượng bài viết
		'cat' => 10, // lấy bài viết trong chuyên mục có id là 1
		'offset' => 1, // Bỏ đi 1 bài viết đầu tiên
	);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query -> in_the_loop = true; ?>
<?php while ($getposts -> have_posts()) : $getposts -> the_post(); ?>
    <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?></a>
    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
	<div class="meta-post">
		<span>Ngày đăng: <?php echo get_the_date('d/m/Y') ?></span>
		<span>Lượt xem: <?php echo getPostView(get_the_id()) ?> lượt</span>
	</div>
    <?php the_excerpt( ) ?>
<?php endwhile; wp_reset_postdata(); ?>