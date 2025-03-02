<?php get_header() ?>
<div class="container p-default">
    <div class="row">
        <h2 class="mb-5">Today's picks</h2>
        <img src="/wp-content/themes/rrb/img/image12.png" alt="">
    </div>
    <div class="row align-items-center">
        <div class="my-3">
            <p class="button text-center text-info border border-info rounded-pill">Culture</p>
        </div>
    </div>
    <div class="row mb-3">
        <p class="my-1 opacity-40">Stephen Leonardi | Software Engineer | 5 min read</p>
        <p class="my-1 opacity-40">September 8 ,2022</p>
    </div>
    <div class="row">
        <div class="col-12 col-80">
            <h3>Anima Introduces: Hotspots Hints</h3>
            <p class="opacity-60">Hotspot Hints Help Guide Users Navigate Through a Prototype, Anima allows designers to create prototypes </p>
            <a href="">Learn more</a>
        </div>
    </div>
</div>
<div class="container px-default">
    <div class="row">
        <div class="col-12 col-lg-6 pb-5 border-bottom border-2">
            <div class="row">
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
                            echo '<p>Sense imatge en el post</p>';
                        }
                        ?>
                    </picture>

                    <a class="new-title" href="<?php the_permalink(); ?>">
                        <p><?php echo the_title(); ?></p>
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
            echo '<p>No hi ha posts disponibles</p>';
        }
        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

        <div class="row p-show-more border-bottom border-2">
            <p id="show-more" class="show-more rounded-1">SHOW MORE</p>
        </div>
<?php get_footer() ?>