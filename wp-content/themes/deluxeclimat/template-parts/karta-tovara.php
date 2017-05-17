<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function karta_tovara ($product)
{
    echo '<div class="loop-product clearfix">';
    echo '<span class="product_sku">' . $product->sku . '</span>';
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
    //                                        foreach ($product->gallery_image_ids as $image_id) {
    //                                            echo $image_id . '<br>';
    //                                        }
    $field_name = "Подробнее";
    $field = get_field($field_name, $product->id);
    echo '<a class="main-button" target="_blank" href="' . $field . '">Подробнее</a>';
    echo '</div>';
    echo '</div>';
}
add_action('init', 'karta_tovara');