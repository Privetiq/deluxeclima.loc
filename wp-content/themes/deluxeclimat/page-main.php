<?php
/**
 * Created by PhpStorm.
 * User: Nekit
 * Date: 17.04.2017
 * Time: 23:23
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>

            <div class="adress-blok wrapper">

                <p>Адрес : г.Киев ул.Выборская 110</p>

                <p>График работы: с 8:00 до 21:00 без выходных</p>

                <p>Телефон: 096-375-75-35 095-810-37-81</p>

                <p>Електронная почта: nbilanenko@gmail.com</p>

            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();