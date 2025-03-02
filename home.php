<?php get_header() ?>
<section>
    <div class="row">
        <?php
        if (have_posts()) {
            global $wp_query;

            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __( 'Anterior', 'textdomain'),
                'next_text' => __( 'Siguiente', 'textdomain'),
            ));

            while (have_posts()) {
                the_post();
        ?>
                <div class="col-lg-6 mb-5">
                    <picture class="thumbnail">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'rounded w-100'));
                        } else {
                            _e('Sense imatge en el post');
                        }
                        ?>
                    </picture>

                    <a class="new-title" href="<?php the_permalink(); ?>">
                        <p><?php the_title(); ?></p>
                    </a>

                    <p class="subtitle mb-sm-2">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
        
        <?php
            }

        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __( 'Anterior', 'textdomain'),
            'next_text' => __( 'Siguiente', 'textdomain'),
        ));


        } else {
            _e('No hi ha posts disponibles');
        }
        ?>
    </div>
</section>
        <div class="row p-show-more border-bottom border-2">
            <p id="show-more" class="show-more rounded-1">SHOW MORE</p>
        </div>
<?php get_footer() ?>
