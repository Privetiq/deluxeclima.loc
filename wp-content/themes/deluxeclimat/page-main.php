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
            echo do_shortcode("[metaslider id=58]");
            ?>

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>

            <section class="buttonblock">
                <a href="#">Комплексное решение</a>
                <a href="#">Отопление</a>
                <a href="#">Охлаждение</a>
                <a href="#">Энергосберегающие технологии</a>
            </section>

            <section class="whyme">
                <h2>Почему мы</h2>

                <p>Индивидуальный подход</p>
                <span>Для нас каждый клиент и объект уникален, потому что наша задача предоставить решение, максимально удовлетворяющее ваши потребности</span>

                <p>Здача работ под ключ</p>
                <span>Объект передается заказчику сотрудником ОТК только после введен</span>

                <p>Постоянная поддержка</p>
                <span>На всех этапах работы мы ориентируемся  на долгосрочное сотрудн</span>

                <p>Гарантия 2-5 лет</p>
                <span>При приобретении нашей продукции и проведению работ по установк</span>
            </section>
            
            <section class="kompleks">
                <h2>Комплексные решения для дома и офиса</h2>
                <p>Преимущество комплексного подхода по достижению максимальной экономичности для Вашего дома и офиса</p>
                <p>Для качественного выполнения проекта по созданию уютного микроклимата помещения очень важно учитывать все внутренние и внешние факторы, влияющие на избыток
                   и потерю тепла, что в свою очередь влечет дополнительные финансовые затраты.</p>
                <p>Нашей основной целью является индивидуальный подход к каждому клиенту, проведение расчетов, подбор оборудования и средств энергосбережения таким образом, чтобы обеспечить оптимальные капитальные вложения, максимально быструю окупаемость, путём снижения эксплуатационных затрат.</p>

                <button>Записаться на консультацию</button>
            </section>
            
            <section class="ourprojects">
                <h2>Наши проэкты</h2>

                <strong>Оформите заявку сейчас</strong>

                <p>и получите расчет стоимости Вашего проекта БЕСПЛАТНО</p>
                <button>ОФОРМИТЬ ЗАЯВКУ</button>
            </section>
            
            <section>
                <h2>О нас</h2>

                <img src="<?php echo get_template_directory_uri() . '/img/bussinesteam.gif'?>" alt="AboutUs">

                <p><strong>DeluxeClima - КОМАНДА ПРОФЕСИОНАЛОВ,</strong> которая работает на рынке вентиляции, кондиционирования
                    и воздушного отопления с 2001 года. Мы сможем подобрать Вам оптимальный набор решений по вопросам климатического оборудования от изготовителей на основе архитектурных особенностей. </p>
                <p>На данный момент общее количество людей, которые работают в команде, составляет  60 человек. В их состав входит: проектная группа
                    - 6 специалистов, монтажные бригады насчитывают 30 сотрудников,
                    а так же менеджеры и технические специалисты. Наша компания имеет собственную материально-техническую базу (цех по производству воздуховодов, складские помещения)</p>

            </section>

            <section class="kakrabotaem">
                <h2>Как мы работаем</h2>
                <p><b>Заказываете услугу на сайте или по телефону<br></b> Связываетесь с представителем нашей компании</p>
                <p><b>Осуществляется анализ объекта<br></b> Инженерами проводится анализ объекта (дистанционно или с выездом), составляется задание на проектирование</p>
                <p><b>Подбираются материалы<br></b> Проводится расчет и подбор необходимых материалов и оборудования в нескольких вариантах, в зависимости от нужд клиента и состояния объекта.</p>

                <p><b>Заключается договор<br></b> на поставку материала, оборудования и проведения работ, с учётом всех дополнительных требований заказчика</p>
                <p><b>Проведятся работы<br></b> Лучшими специалистами на наивысшем уровне проводятся работы, которые описанны в договоре</p>
                <p><b>Оценивается качество<br></b> На объект выезжает сотрудник из отдела технического контроля, оценивает работу, оставляет необходимые документы, ставит фирменные пломбы</p>
            </section>

            <section class="voprosi">
                <h2>Остались вопросы?</h2>
                <p>Задайте их нам, заполнив форму ниже и наши специалисты свяжутся с Вами в ближайше время</p>

                <?php echo do_shortcode('[contact-form-7 id="28" title="Заказать звонок"]') ?>

            </section>

            <div class="adress-blok wrapper">
                <p>Адрес : г.Киев ул.Выборская 110</p>

                <p>График работы: с 8:00 до 21:00 без выходных</p>

                <p>Телефон: 096-375-75-35 095-810-37-81</p>

                <p>Електронная почта: nbilanenko@gmail.com</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5104.945525637181!2d30.23198228835216!3d50.22707222616012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa91b464119821288!2z0JrQsNC70LjQvdC60LA!5e0!3m2!1sru!2sua!4v1492749759332" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();