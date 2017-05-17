<?php
/**
 * Created by PhpStorm.
 * User: Nekit
 * Date: 09.05.2017
 * Time: 0:31
 */
get_header(); ?>
    <div class="h2_divider blueback">
        <h2>Что важно учитывать при выборе кондиционера</h2>
    </div>
    <section id="truevibor">
        <div class="container">
            <div class="row">
                <div class="section-caption col-lg-offset-6 col-lg-6 col-md-offset-4 col-md-8 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
                    <p>ПРИ ВЫБОРЕ КОНДИЦИОНЕРА за частую многие смотрят на рекомендуемую площадь предусмотренную производителем, забывая о главной характеристике ТЕПЛО-ХОЛОДО ПРОИЗВОДИТЕЛЬНОСТИ (кВт). А именно этот параметр является самым важным, индивидуальным для каждого помещения критерием, расчет которого обязательно должен проводится специалистами.<br><br>
                        Выбирая кондиционер основываясь на площадь "С ЗАПАСОМ" - скорее всего вы переплатите за более мощное оборудование которое будет нецелесообразно тратить энергоресурсы, в случае выбора холодильного оборудования по рекомендованной площади - существует вероятность недостатка производительности, при этом оборудование будет работать на пределе своих возможностей не принося ожидаемого результата<br><br>
                        Вот почему для нас так важен индивидуальный подход к каждому клиенту!<br><br>
                    </p>
                    <button class="callbackmenu main-button2">Узнать подробнее</button>
                </div>
            </div>
        </div>
    </section>

    <div class="h2_divider blueback">
        <h2>Наши акции и специальные предложения</h2>
    </div>

    <section id="banner-akcia">
        <img class="banner-img1" src="<?php echo get_template_directory_uri(); ?>/img/specpredlogenie.png" alt="Специальное предложение">
        <img class="banner-img3" src="<?php echo get_template_directory_uri(); ?>/img/montajnik.png" alt="Монтажник">
        <img class="banner-img2" src="<?php echo get_template_directory_uri(); ?>/img/SRK-ZXA-S.png" alt="Кондиционер недорого">
        <span class="banner-text1">Купите кондиционер у нас</span>
        <span class="banner-text2">и получите монтаж</span>
        <span class="banner-text3">за 1 гривну!</span>
        <a href="#katalog" class="main-button banner-button">Смотреть каталог</a>
    </section>

    <section id="vibor">
        <div class="h2_divider">
            <h2>Обычный или инверторный? Вот в чем вопрос</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p><strong>Обычные кондиционеры</strong> работают фактически в двух режимах: слабое и сильное охлаждение.</p>
                    <p><strong>Инверторные кондиционеры</strong> точнее поддерживают температуру (заданный режим). Инверторные варианты издают заметно меньше шума</p>
                    <p><strong>Обычные кондиционеры</strong> имеют еще один недостаток — большее потребление энергии. Если вы используется инверторные приборы, то экономия электроэнергии составляет примерно тридцать процентов.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p><b>При одинаковой мощности</b> инверторные кондиционеры будут охлаждать помещение быстрее. Обычно на это требуется порядка пятнадцати минут.</p>
                    <p><i>Инверторные кондиционеры более надежны</i> (срок их ксплуатации больше). Можно сказать, это является альтернативой их высокой стоимости.</p>
                    <p><strong class="touppercase">Помогут Вам выбрать нужный кондиционер наши высококвалифицированные специалисты</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!--            <?php //while ( have_posts() ) : the_post();
    //                get_template_part( 'template-parts/content', 'page' );
    //                endwhile; // End of the loop.
    ?>-->

    <section id="whyme2">
        <div class="podlojka">
            <div class="container">
                <div class="row">
                    <div class="h2_divider whymyh2">
                        <h2>Почему стоит доверить выбор кондиционера именно нам</h2>
                    </div>
                    <div class="wow fadeInUpBig col-lg-4 col-md-4 col-sm-12 col-xs-12" data-wow-delay="0s" data-wow-offset="0">
                        <div class="myicon icon-customer"></div>
                        <p><strong>ИНДИВИДУАЛЬНО для ВАС</strong><br>
                            Проведем расчет для оптимального подбора оборудования с <b>учётом всех Ваших желаний</b></p>
                        </p>
                    </div>
                    <div class="wow fadeInUpBig col-lg-4 col-md-4 col-sm-12 col-xs-12" data-wow-delay="1s" data-wow-offset="50">
                        <div class="myicon icon-aircond"></div>
                        <p><strong>КАЧЕСТВЕННЫЙ монтаж</strong><br>
                            Специалистами нашей компании проведётся монтаж согласно <b>всех норм и стандартов</b>
                        </p>
                    </div>
                    <div class="wow fadeInUpBig col-lg-4 col-md-4 col-sm-12 col-xs-12" data-wow-delay="2s" data-wow-offset="100">
                        <div class="myicon icon-shield"></div>
                        <p><strong>Гарантия 2-5 лет</strong><br>
                            Оставим гарантию на проделанные работы сроком равным <b>гарантии на оборудование: 2-5 лет!</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="katalog">


        <?php do_action('woocommerce_before_main_content'); ?>

        <?php do_action('woocommerce_archive_description'); ?>

        <?php do_action('woocommerce_before_shop_loop'); ?>
        <?php do_action('woocommerce_before_shop_loop_item'); ?>
        <?php do_action('woocommerce_before_shop_loop_item_title'); ?>

        <?php do_action('woocommerce_shop_loop_item_title'); ?>

        <?php do_action('woocommerce_after_shop_loop_item_title'); ?>
        <?php do_action('woocommerce_after_shop_loop_item'); ?>
        <?php do_action('woocommerce_after_shop_loop'); ?>

        <?php do_action('woocommerce_after_main_content'); ?>
    </section>


    <div id="adress-blok">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <br><p>Адрес : г.Киев улица Васильковская 27/2</p><br>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <br><p>График работы: с 8:00 до 21:00 без выходных</p><br>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <p>Телефоны: <br> <a href="tel:0672262629">(067)226-26-29</a> <br> <a href="tel:0952872629">(095)287-26-29</a> <br> <a href="tel:0442282629">(044)228-26-29</a></p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <br><p>Електронная почта: <a href="mailto:deluxeclimate@gmail.com">deluxeclimate@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.5592149269432!2d30.490780315729328!3d50.39341497946751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c8c5642fd4c5%3A0x1d8e3b48b0c817ca!2z0LLRg9C70LjRhtGPINCS0LDRgdC40LvRjNC60ZbQstGB0YzQutCwLCAyN9CaMiwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1493130584719" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
