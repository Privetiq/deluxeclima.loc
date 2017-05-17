<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );

remove_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );


function sort_category_nekit ($f1, $f2) {
    if($f1->meta_value < $f2->meta_value) return -1;
    elseif($f1->meta_value > $f2->meta_value) return 1;
    else return 0;
} //Функция которая сортирует массив по дескрипшну категории

function nekit_product_cart($product) {
    echo '<div class="loop-product clearfix">';
    echo '<span class="product_sku">код товара: ' . $product->sku . '</span>';
    echo '<div class="loop-left">';
    echo '<span class="type_product">';
    echo the_field("Вид", $product->id);
    echo '</span>';
    echo '<div class="product_thumbnail">' . get_the_post_thumbnail($product->id, 'medium') . '</div>';
    echo '<div class="mygalery woocommerce-product-gallery">';

    echo '</div>';
    echo '</div>';

    echo '<div class="loop-right">';
    echo '<h3 class="product_name">' . $product->name . '</h3>';
    echo '<div class="product_description">' . $product->description . '</div>';
    echo '<p class="product_price">Цена от: <span>' . $product->price . 'грн</span></p>';

    echo '<a class="main-button" target="_blank" href="' . get_field("Подробнее", $product->id) . '">Подробнее</a>';
    echo '</div>';
    echo '</div>';
} //функция выводит карточку товара


function my_get_cat() {
    $all_categories = get_categories( array('taxonomy' => 'product_cat', 'hide_empty' => 0) );
    return $all_categories;
} //функция которая возвращает массив категорий


add_action( 'woocommerce_before_main_content', 'nekit_start_wrapper_product', 10 );
function nekit_start_wrapper_product() { ?>
    <div class="h2_divider whymyh2">
        <h2>Выберите тип кондиционера и бренд для просмотра каталога товаров</h2>
    </div>
<?php } //функция которая выводит заголовок каталога h2


add_action( 'woocommerce_archive_description', 'nekit_buttons_product', 10 );
function nekit_buttons_product() {
    echo '<div class="mywrap">';
    $all_categories = my_get_cat();
    foreach ($all_categories as $cat) {
        $thumbnail_cat_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
        $myimage_url = wp_get_attachment_url($thumbnail_cat_id);
        if ($cat->category_parent == 49 && $cat->term_id !== 36) {

        ?>

    <div class="typecond">
        <button class="link-typecond">
            <div class="cat_img">
                <img src="<?php print_r($myimage_url);?>" alt="<?php echo $cat->name; ?>">
            </div>
            <p><strong><?php echo $cat->name; ?></strong><br><?php echo $cat->description; ?></p>
        </button>
    </div>

<?php }
        //специальное условие для промышленных кондёров
        if ($cat->term_id == 36) {
        ?>
            <div class="typecond">
                <button class="link-typecond callbackmenu">
                    <div class="cat_img">
                        <img src="<?php print_r($myimage_url);?>" alt="<?php echo $cat->name; ?>">
                    </div>
                    <p><strong><?php echo $cat->name; ?></strong><br><?php echo $cat->description; ?></p>
                </button>
            </div>

<?php   }
    }
echo '</div>';
} //функция выводит кнопочки для категорий кондиков


add_action( 'woocommerce_before_shop_loop', 'nekit_brands_catalog_start', 10 );
function nekit_brands_catalog_start () {
    echo '<div class="catalog">';
    echo '<div class="container">';
    echo '<div class="row">';
} //выводит обёртку каталогов


function brands_loop( $arg ) {
    $all_cat = my_get_cat();
    $all_cat1 = @usort($all_cat, "sort_by_price_nekit");

    var_dump($all_cat1);

    foreach ($all_cat as $cat) {
        if ($cat->category_parent == $arg) {
            echo '<div class="brand-cond">';
            $thumbnail_cat_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
            $myimage_url = wp_get_attachment_url($thumbnail_cat_id);
            echo '<img src="' . $myimage_url . '" alt="' . $cat->name . '" class="band-cond-img">';
            echo '</div>';
        }
    }
}


add_action( 'woocommerce_before_shop_loop', 'nekit_brands_catalog_loop_start', 20 );
function nekit_brands_catalog_loop_start() {
    $all_cat = my_get_cat();
    foreach ($all_cat as $cat) {
        if ($cat->category_parent == 43) {
            echo '<div class="elitnost col-lg-4 col-md-4 col-sm-12 col-xs-12">';
            echo '<h3><i class="myicon3 icon-' . $cat->category_nicename . '"></i>' . $cat->name . '</h3>';
            brands_loop( $cat->term_id );
            echo '</div>';
        }
    }
}


add_action( 'woocommerce_before_shop_loop', 'nekit_brands_catalog_end', 30 );
function nekit_brands_catalog_end () {
    echo '</div><!-- row -->';
    echo '</div>';
    echo '<div class="container catalog-bg">
            <div class="row catalog-body">';
}


add_action( 'woocommerce_before_shop_loop_item', 'nekit_loop_item_before', 10 );
function nekit_loop_item_before() {
    echo '<div class="col-lg-3 col-md-5 hidden-sm hidden-xs">';
    get_sidebar();
    ?>
<!-- Вставить сюда фильтры -->


<?php    echo  '</div><div class="col-lg-9 col-md-7 col-sm-12 col-xs-12 loop-catalog products">';
}




add_action( 'woocommerce_shop_loop_item_title', 'nekit_loop_products', 10);
function nekit_loop_products() {

    $category = array();
    $orderby = 'rand';
    $order = 'ASC';
    $limit = 30;
    $args = array(
            'status' => 'publish',
            'category' => $category,
            'orderby' => $orderby,
            'order' => $order,
            'limit' => $limit,
    );

    function sort_by_price_nekit($f1, $f2) {

            if($f1->price < $f2->price) return -1;
            elseif($f1->price > $f2->price) return 1;
            else return 0;

    }

    $all_products = wc_get_products( $args );

    function sorting_nekit($massiv, $args) {
        if ($args == 'price') {
            @uasort($massiv,"sort_by_price_nekit");
            return $massiv;
        } elseif ($args == 'price_desc') {
            @uasort($massiv,"sort_by_price_nekit");
            $massiv = array_reverse($massiv);
            return $massiv;
        }  else {
            return $massiv;
        }
    }

    $all_products1 = sorting_nekit($all_products, $_GET['sorting']);

    foreach ($all_products1 as $product){

        $filter = get_field("Вид", $product->id);
        $filter_arg = $_GET['filter'];
        if (isset($filter) && $filter == $filter_arg) {
            nekit_product_cart($product);
        } else {
            nekit_product_cart($product);
        }

    }
}





add_action( 'woocommerce_after_shop_loop_item', 'nekit_loop_item_after', 10 );
function nekit_loop_item_after(){
    echo '</div>';
}


add_action( 'woocommerce_after_shop_loop', 'nekit_catalog_end', 10 );
function nekit_catalog_end() {
    echo '</div><!-- row catalog-body -->';
    echo '</div>';
    echo '</div>';
}
