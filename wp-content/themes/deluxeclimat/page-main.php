<?php
/**
 * Created by PhpStorm.
 * User: Nekit
 * Date: 17.04.2017
 * Time: 23:23
 */

get_header(); ?>

    <div id="primary" class="content-area">
            <?php
            echo do_shortcode("[metaslider id=58]");
            ?>


        <main id="main" class="site-main" role="main">
            <div class="container">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>

                <section class="buttonblock row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#" class="but_komleks">Комплексное решение</a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#" class="but_otoplenie">Отопление</a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#" class="but_ohlad">Охлаждение</a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#" class="but_energoteh">Энергосберегающие технологии</a></div>
                </section>
            </div>

            <section id="whyme" class="container-fluid">
                <div class="row">
                    <div class="h2_divider col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Почему мы</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="iconka">
                            <a class="icons-hand"></a>
                        </div>
                        <h3><strong>Индивидуальный</strong><br> подход</h3>
                        <p>Для нас каждый клиент и объект уникален, потому что наша задача предоставить решение, максимально удовлетворяющее ваши потребности</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="iconka">
                            <a class="icons-home"></a>
                        </div>
                        <h3><strong>Cдача работ</strong><br> под ключ</h3>
                        <p>Объект передается заказчику сотрудником ОТК только после введения в эксплуатацию и проверки<br>&nbsp;</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="iconka">
                            <a class="icons-mydilo"></a>
                        </div>
                        <h3><strong>Постоянная</strong><br> поддержка</h3>
                        <p>На всех этапах работы мы ориентируемся  на долгосрочное сотрудн</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="iconka">
                            <a class="icons-shield"></a>
                        </div>
                        <h3><strong>Гарантия</strong><br> 2-5 лет</h3>
                        <p>При приобретении нашей продукции и проведению работ по установк</p>
                    </div>

                    <div class="h2_divider col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Комплексные решения для дома и офиса</h2>
                    </div>

                </div>
            </section>
            
            <section id="kompleks">
                <div class="caption">
                    <p>Преимущество комплексного подхода по достижению максимальной экономичности для Вашего дома и офиса</p>
                    <p>Для качественного выполнения проекта по созданию уютного микроклимата помещения очень важно учитывать все внутренние и внешние факторы, влияющие на избыток
                       и потерю тепла, что в свою очередь влечет дополнительные финансовые затраты.</p>
                    <p>Нашей основной целью является индивидуальный подход к каждому клиенту, проведение расчетов, подбор оборудования и средств энергосбережения таким образом, чтобы обеспечить оптимальные капитальные вложения, максимально быструю окупаемость, путём снижения эксплуатационных затрат.</p>

                    <button>Записаться на консультацию</button>
                </div>
            </section>
            
            <section id="ourprojects" class="container-fluid">
                <div class="row">
                    <div class="h2_divider col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Наши проэкты</h2>
                    </div>
                    <?php echo do_shortcode("[slide-anything id='112']");?>


                    <div class="background-ourproject">
                        <div class="bg-before">
                            <img src="<?php echo get_template_directory_uri()?>/img/keyboard.png" alt="keyboard">
                        </div>
                        <div class="bg-after">
                            <img src="<?php echo get_template_directory_uri()?>/img/MagicMouse2.png" alt="magicmouse">
                        </div>
                        <strong>Оформите заявку сейчас</strong>
                        <hr>
                        <p>и получите расчет стоимости Вашего проекта БЕСПЛАТНО</p>
                        <button>ОФОРМИТЬ ЗАЯВКУ</button>.
                    </div>
                </div>
            </section>
            
            <section id="about-us">
                <div class="container">
                    <div class="row">
                        <h2 class="h2_divider">О нас</h2><br>
                        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                            <p><strong>DeluxeClima - КОМАНДА ПРОФЕСИОНАЛОВ,</strong> которая работает на рынке вентиляции, кондиционирования и воздушного отопления с 2001 года. Мы сможем подобрать Вам оптимальный набор решений по вопросам климатического оборудования от изготовителей на основе архитектурных особенностей. </p>
                            <p>На данный момент общее количество людей, которые работают в команде, составляет  60 человек. В их состав входит: проектная группа - 6 специалистов, монтажные бригады насчитывают 30 сотрудников, а так же менеджеры и технические специалисты. Наша компания имеет собственную материально-техническую базу (цех по производству воздуховодов, складские помещения)</p><br>
                            <a href="#">Читать далее</a>
                        </div>
                        <div class="col-lg-5 col-md-4 hidden-sm hidden-xs">
                            <img src="<?php echo get_template_directory_uri() . '/img/bussinesteam.gif'?>" alt="AboutUs" class="img_about_us">
                        </div>
                        <h2 class="h2_divider">Как мы работаем</h2>
                    </div>
                </div>
            </section>

            <section id="kakrabotaem">
                <div class="podlojka">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?php echo get_template_directory_uri()?>/img/phone-call.png" alt="phone-call">
                                <p><b>Заказываете услугу на сайте или по телефону<br></b> Связываетесь с представителем нашей компании</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?php echo get_template_directory_uri()?>/img/house.png" alt="house">
                                <p><b>Осуществляется анализ объекта<br></b> Инженерами проводится анализ объекта (дистанционно или с выездом), составляется задание на проектирование</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?php echo get_template_directory_uri()?>/img/calculator.png" alt="calculator">
                                <p><b>Подбираются материалы<br></b> Проводится расчет и подбор необходимых материалов и оборудования в нескольких вариантах, в зависимости от нужд клиента и состояния объекта.</p>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?php echo get_template_directory_uri()?>/img/quality.png" alt="quality">
                                <p><b>Заключается договор<br></b> на поставку материала, оборудования и проведения работ, с учётом всех дополнительных требований заказчика</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?php echo get_template_directory_uri()?>/img/settings.png" alt="settings">
                                <p><b>Проведятся работы<br></b> Лучшими специалистами на наивысшем уровне проводятся работы, которые описанны в договоре</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?php echo get_template_directory_uri()?>/img/contract.png" alt="contract">
                                <p><b>Оценивается качество<br></b> На объект выезжает сотрудник из отдела технического контроля, оценивает работу, оставляет необходимые документы, ставит фирменные пломбы</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="voprosi">
                <h2 class="h2_divider">Остались вопросы?</h2>
                <p>Задайте их нам, заполнив форму ниже и наши специалисты свяжутся с Вами в ближайше время</p>

                <div class="container">
                    <div class="row">
                        <?php echo do_shortcode('[contact-form-7 id="28" title="Заказать звонок"]') ?>
                    </div>
                </div>

            </section>

            <div id="adress-blok">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <p>Адрес : г.Киев улица Васильковская 27/2</p><br>
                        </div>
    
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <p>График работы: с 8:00 до 21:00 без выходных</p><br>
                        </div>
    
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <p>Телефон: <a href="tel:0672262629">(067)226-26-29</a>  <a href="tel:0952872629">(095)287-26-29</a>  <a href="tel:0948282629">(094)828-26-29</a></p><br>
                        </div>
    
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <p>Електронная почта: <a href="mailto:deluxeclimate@gmail.com">deluxeclimate@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.5592149269432!2d30.490780315729328!3d50.39341497946751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c8c5642fd4c5%3A0x1d8e3b48b0c817ca!2z0LLRg9C70LjRhtGPINCS0LDRgdC40LvRjNC60ZbQstGB0YzQutCwLCAyN9CaMiwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1493130584719" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();