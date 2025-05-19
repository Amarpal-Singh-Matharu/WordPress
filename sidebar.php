<section class="recentblogWrapper">
    <div class="recentTitle">
        Recent Blog
    </div>
    <div class="recentList">
        <?php
        global $post;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => array($post->ID)
        );
        $resultt = new WP_Query($args);
        if ($resultt->have_posts()) {
            while ($resultt->have_posts()) : $resultt->the_post();
        ?>

                <div class="post-single">
                    <a href="<?php the_permalink(); ?>">
                        <div class="imgWrapper">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid " />
                        </div>
                        <div class="contentWrapper">
                            <div class="single-title">
                                <?php echo substr_replace(get_the_title(), "...", 32); ?>
                            </div>
                            <div class="author_date">
                                <?php echo get_the_time('M d, Y'); ?>
                            </div>
                        </div>
                    </a>
                </div>

            <?php
            endwhile;
        } else {
            ?>
            <p class="text-center">No blog found.</p>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</section>

<section>
    <div class="widget widget_categories">
        <div class="widget-header">
            <h3 class="xs-title position-relative">Categories</h3>
        </div>
        <ul class="d-flex flex-column">
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
            ?>
                <li class="cat-item">
                    <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</section>