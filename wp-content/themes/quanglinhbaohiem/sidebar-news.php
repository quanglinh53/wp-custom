
<!-- https://huykira.net/webmaster/wordpress/code-hay-lap-trinh-theme-wordpress.html
2.Code lấy 10 bài viết mới nhất theo category. -->

<h3>3 bài viết mới nhất về Kiến thức</h3>
<!-- Get post News Query -->
<?php $getposts = new WP_query(); $getposts -> query('post_status=publish&showposts=1&post_type=post&cat=7'); ?>
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
<!-- Get post News Query -->

<!-- CSS bonus
object-fit: cover -->
<!-- 25. Code lấy 8 bài viết xem nhiều: -->

<div class="widget">
	<h3>Bài viết xem nhiều</h3>
	<div class="content-w">
		<ul>
            <?php $i = 1 ?>
			<?php $getposts = new WP_query(); $getposts -> query('post_status=publish&showposts=8&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
			<?php global $wp_query; $wp_query -> in_the_loop = true; ?>
			<?php while ($getposts -> have_posts()) : $getposts -> the_post(); ?>
				<li>
                    <span><?php echo $i ?></span>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</li>
                <?php $i++ ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>