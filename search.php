<?php
    /* The template for displaying Search Results pages.*/

    get_header(); 
?>

    <section id="primary" class="product">
        <div id="content" class="site-content" role="main">
            <?php 
                $s=get_search_query();
                $args = array(
                    's' =>$s,
    	            'posts_per_page'=>-1
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) { 
            ?>
                <div class="serarchWrapper py-3">
                    <div class="container">
                        <div class="searchTitle mb-4 text-center">
                            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        </div>
                        <div class="cardWrapper py-3">
                            <div class="row justify-content-center">
                                <?php  
                                    while ( $the_query->have_posts() ) {
                                    $the_query->the_post(); 
                                ?>
                                    <div class="col-lg-3 mb-3 mb-lg-4">
                                        <div class="productWrapper">
                                            <a href="<?php the_permalink(); ?>">
                                                <div>
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="productImg">
                                                </div>
                                                <div class="productInfoWrapper">
                                                    <div class="productName"><?php the_title()?></div>
                                                    <div class="productInfo"><?php the_excerpt(); ?></div>
                                                    <button class="enqBtn">
                                                        Enquire Now
                                                    </button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }else{
            ?>
                <div class="nosearchContent text-center">
                    <h3>No Results found.</h3>
                </div>
            <?php } ?>
            </div>
    </section>

<?php get_footer(); ?>