/**
 * Redirect shop url to new url
 */
add_filter( 'woocommerce_return_to_shop_redirect', 're_woocommerce_shop_url' );
function re_woocommerce_shop_url(){
    return site_url() . '/shops/';
}
