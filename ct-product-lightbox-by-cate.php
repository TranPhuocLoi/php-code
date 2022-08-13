add_action ('woocommerce_before_shop_loop_item', 'custom_product_image_link');
function custom_product_image_link(){
  global $product;
  $link_id = "#pro_popup";
  $link_lightbox = "pro_popup";
  $pro_id = $product->get_id();
  $link_id .= $pro_id;
  $link_lightbox .= $pro_id;
  if (
        count(
            array_intersect(
                allowed_categories(), // Allowed Categories.
                wc_get_product_cat_ids( $product->get_id() ) // Product category ids.
            ) // Check any match for allowed category.
        ) > 0 // Pass the condition if atleast one allowed category exists.
    ) {
       echo do_shortcode( '[button text="" size="xsmall"  link="'.$link_id.'" class="view_pro_popup"][lightbox id="'.$link_lightbox.'" class="pro_popup" width="600px" padding="30px"]
	   <h3 style="text-align: center;"><span style="font-size: 130%;">DECLARATION</span></h3>
	   <br> 
	   <div class="wrap_option">
	    <img heigt="35" width="35" src="url">
	    <a href="'.get_the_permalink().'" title="'.get_the_title().'">Tôi là chuyên gia</a>
	   </div>
	   <div class="wrap_option">
	     <img heigt="35" width="35" src="url">
	     <a href="/" title="Trang chủ">Tôi không phải là chuyên gia</a>
	   </div>
	   [/lightbox]' );

    }
}
function allowed_categories() {
    return array(377);
}  