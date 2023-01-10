        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Về chúng tôi</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <!-- 2.Code lấy 10 bài viết mới nhất theo category. -->
                        <!-- Get post News Query -->
                        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=page&p=65'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <h3><?php the_title() ?></h3>
                            <?php the_excerpt( ) ?>
                            <a href="<?php the_permalink() ?>">Xem thêm</a>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <!-- Get post News Query -->
                        <!-- Get category -->
                    </div>
                    
                    <div class="col-lg-4 my-3 my-lg-0">
                        <!-- Get post News Query -->
                        <h3>Liên hệ</h3>
                        <span>Tại đây <a href="<?php bloginfo('url') ?>/lien-he">Tại đây</a> </span>
                    </div>

                    <div class="col-lg-4 text-lg-end">
                        <ul>
                            <?php
                            $args = array(
                                'child_of'      => 0,
                                'orderby'       => 'id',
                            );
                            $categories = get_categories( $args );
                            foreach ( $categories as $category ) { ?>
                                <li>
                                    <a class="link-dark text-decoration-none" href="<?php echo get_term_link($category -> slug, 'category');?>">
                                        <?php echo $category -> name ; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php bloginfo('template_directory') ?>/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=1213564832159448&autoLogAppEvents=1" nonce="14byrSuw"></script>
        <?php wp_footer(); ?>
    </body>
</html>
