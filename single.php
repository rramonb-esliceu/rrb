<?php get_header() ?>
<p><?php echo reading_time(); ?></p>

    <div class="container p-article">
        <div class="row">
            <a href="#">
            <div class="col-12"></div>
                <h3 id="back" class="epilogue">            
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg>
                    Back
                </h3>
            </a>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="big-h1"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <?php if ( has_post_thumbnail() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-man img-single col-6">
            <?php endif; ?>
            <div class="col-6">
                <div class="row opacity-40">
                    <p class="mb-2"><?php the_author(); ?> | Product designer</p>
                </div>
                <div class="row opacity-40">
                    <p><?php the_date(); ?> | <?php echo reading_time(); ?> min read</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 mt-2">
                <p class="opacity-60"><?php the_content(); ?></p>
            </div>
        </div>
    </div>
    <div class="container p-article">
        <div class="row border-bottom border-2 pb-5">
            <h2 class="d-flex justify-content-center pb-3">Related posts</h2>
            <div class="row">
                <?php
                $related = new WP_Query( array(
                    'posts_per_page' => 2,
                    'post__not_in' => array( get_the_ID() ),
                    'orderby' => 'rand'
                ));
                if ( $related->have_posts() ) : while ( $related->have_posts() ) : $related->the_post(); ?>
                    <div class="col-12 col-md-6 pb-5">
                        <div class="row">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" class="sm-img">
                            <?php endif; ?>
                            <p class="text-center text-info border border-info rounded-pill mt-3 col-3">Technology</p>
                            <div class="row">
                                <div class="width-470">
                                    <p class="opacity-40"><?php the_author(); ?> | <?php echo reading_time(); ?> min read</p>
                                    <p class="opacity-40"><?php the_date(); ?></p>
                                </div>
                                <div class="width-470">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="opacity-60"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>
