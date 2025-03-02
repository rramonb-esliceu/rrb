<?php get_header() ?>
        <div class="container p-default">
            <div class="row justify-content-center">
                <div class="col-12 text-start">
                    <h1 class="titulo">Today's picks</h1>
                </div>
                <div class="col-12 text-center mt-5 ps-4 title-description">
                    <img class="mt-4 mb-5 align-items-center img-fluid" src="/wp-content/themes/acv/img/cultura.png" alt="">
                    <div class="text-start mt-4">
                        <div class="row">
                            <div class="col-2">
                                <button class="btn btn-outline-info boton rounded-pill">culture</button>
                            </div>
                        </div>
                        <div class="mt-3 texto-gris">
                            <p>Stephen Leonardi | Software Engineer | 5 min read</p>
                            <p>September 8 ,2022</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-left">
                    <div class="titulo">
                        <h3>Anima Introduces: Hotspots Hints</h3>
                    </div>
                    <div class="descripcion col-80">
                        <p>Hotspot Hints Help Guide Users Navigate Through a Prototype, Anima allows designers to create prototypes</p>
                    </div>
                    <div>
                        <p><a class="link-opacity-100 link-underline link-underline-opacity-25" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="text-center mx-auto p-default2">
            
            <div class="row">
                <div class="col-2 mucho-margin">
                    <button class="btn botongrande btn-primary boton mt-4 btn-lg showmore">SHOW MORE</button>
                </div>
            </div>
<?php get_footer() ?>