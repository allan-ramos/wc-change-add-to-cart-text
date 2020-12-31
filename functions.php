<?php

// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
	
    return __( 'Comprar', 'woocommerce' ); 
}

// Change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Comprar', 'woocommerce' );
}

//Change add to cart text on product archives (Collection) page by ID
add_filter( 'woocommerce_product_add_to_cart_text', 'custom_loop_add_to_cart_button', 20, 2 ); 
function custom_loop_add_to_cart_button( $button_text, $product ) {
    // BELOW set the product categoty slug and the product ID
    if($product->get_id() == '3113' ) {
        $button_text = __("Precomprar", "woocommerce");
    }
    return $button_text;
}

// Change add to cart text on single product page by ID
add_filter( 'woocommerce_product_single_add_to_cart_text', 'custom_loop_add_to_cart_button2', 20, 2 ); 
function custom_loop_add_to_cart_button2( $button_text, $product ) {
// BELOW set the product categoty slug and the product ID
    if($product->get_id() == '3113' ) {
       $button_text = __("Precomprar", "woocommerce");
    }
    return $button_text;
}

?>
