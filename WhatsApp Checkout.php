<?php
class SolusiPress_WA_Checkout {
	
	protected $version = '0.9.2';
	protected $wa_number = '6281314997198';
	protected $resend_text = 'Click here if your browser not redirect to WhatsApp';
	protected $wa_message_template = <<<EOT
Halo kak, 

Berikut pesanan saya, mohon segera diproses

*Nama:* {{first_name}} {{last_name}}
*Telepon:* {{phone}}
*Alamat Kirim:* {{address_1}} {{address_2}}
*Catatan:*
{{note}}

-----------------------------------------
{{woo-orderdetail}}		
EOT;

    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'woocommerce_after_checkout_validation', array( $this, 'wc_prevent_submission' ), 10, 2 );
		add_action( 'wp_ajax_wa-checkout', array( $this, 'whatsapp_checkout' ) );
		add_action( 'wp_ajax_nopriv_wa-checkout', array( $this, 'whatsapp_checkout' ) );
		add_action( 'woocommerce_checkout_order_processed', array( $this, 'checkout_order_processed' ), 50, 3 );                
		add_filter( 'woocommerce_checkout_posted_data', array( $this, 'set_shipping_fields' ) );
		add_action( 'woocommerce_before_template_part', array( $this, 'resend_wa_link' ), 10, 4 );
        add_action( 'woocommerce_before_thankyou', array( $this, 'resend_wa_link_thankyou' ), 10, 1 );
    }	
	
    public function enqueue_scripts() {
		$uri = home_url( '/wp-content/uploads/custom-css-js/' );
        wp_register_script( 'woo-whatsapp-checkout', $uri . 'whatsapp-checkout.js', array( 'jquery' ), $this->version );
        wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css' );   
        if( is_checkout() ) { 
            wp_enqueue_style( 'fontawesome' );
			wp_localize_script( 'woo-whatsapp-checkout', 'solusipress', array(
				'ajaxurl' => adclass SolusiPress_WA_Checkout {
2
    
3
    protected $version = '0.9.2';
4
    protected $wa_number = '6281314997198';
5
    protected $resend_text = 'Click here if your browser not redirect to WhatsApp';
6
    protected $wa_message_template = <<<EOT
7
Halo kak, 
8
​
9
Berikut pesanan saya, mohon segera diproses
10
​
11
*Nama:* {{first_name}} {{last_name}}
12
*Telepon:* {{phone}}
13
*Alamat Kirim:* {{address_1}} {{address_2}}
14
*Catatan:*
15
{{note}}
16
​
17
-----------------------------------------
18
{{woo-orderdetail}}     
19
EOT;class SolusiPress_WA_Checkout {
2
    
3
    protected $version = '0.9.2';
4
    protected $wa_number = '6281314997198';
5
    protected $resend_text = 'Click here if your browser not redirect to WhatsApp';
6
    protected $wa_message_template = <<<EOT
7
Halo kak, 
8
​
9
Berikut pesanan saya, mohon segera diproses
10
​
11
*Nama:* {{first_name}} {{last_name}}
12
*Telepon:* {{phone}}
13
*Alamat Kirim:* {{address_1}} {{address_2}}
14
*Catatan:*
15
{{note}}
16
​
17
-----------------------------------------
18
{{woo-orderdetail}}     
19
EOT;
20

20
min_url( '/admin-ajax.php' ),
				'security' => wp_create_nonce( 'solusipress-woo-checkout-wa' )
			) );
			wp_enqueue_script( 'woo-whatsapp-checkout' );           
        }
    }	
	
	public function wc_prevent_submission($data, $errors) {
		if ( isset($_POST['spwoo_prevent_submit']) && empty( $errors->errors ) ) {
			$errors->add( 'theme', __( 'go_whatsapp_redirect', 'woocommerce' ) );
		} 
	}
	class SolusiPress_WA_Checkout {
2
    
3
    protected $version = '0.9.2';
4
    protected $wa_number = '6281314997198';
5
    protected $resend_text = 'Click here if your browser not redirect to WhatsApp';
6
    protected $wa_message_template = <<<EOT
7
Halo kak, 
8
​
9
Berikut pesanan saya, mohon segera diproses
10
​
11
*Nama:* {{first_name}} {{last_name}}
12
*Telepon:* {{phone}}
13
*Alamat Kirim:* {{address_1}} {{address_2}}
14
*Catatan:*
15
{{note}}
16
​
17
-----------------------------------------
18
{{woo-orderdetail}}     class SolusiPress_WA_Checkout {
2
    
3
    protected $version = '0.9.2';
4
    protected $wa_number = '6281314997198';
5
    protected $resend_text = 'Click here if your browser not redirect to WhatsApp';
6
    protected $wa_message_template = <<<EOT
7
Halo kak, 
8
​
9
Berikut pesanan saya, mohon segera diproses
10
​
11
*Nama:* {{first_name}} {{last_name}}
12
*Telepon:* {{phone}}
13
*Alamat Kirim:* {{address_1}} {{address_2}}
14
*Catatan:*
15
{{note}}
16
​
17
-----------------------------------------
18
{{woo-orderdetail}}     class SolusiPress_WA_Checkout {
2
    
3
    protected $version = '0.9.2';
4
    protected $wa_number = '6281314997198';
5
    protected $resend_text = 'Click here if your browser not redirect to WhatsApp';
6
    protected $wa_message_template = <<<EOT
7
Halo kak, 
8
​
9
Berikut pesanan saya, mohon segera diproses
10
​
11
*Nama:* {{first_name}} {{last_name}}
12
*Telepon:* {{phone}}
13
*Alamat Kirim:* {{address_1}} {{address_2}}
14
*Catatan:*
15
{{note}}
16
​
17
-----------------------------------------
18
{{woo-orderdetail}}     class SolusiPress_WA_Checkout {
2
    
3
    protected $version = '0.9.2';
4
    protected $wa_number = '6281314997198';
5
    protected $resend_text = 'Click here if your browser not redirect to WhatsApp';
6
    protected $wa_message_template = <<<EOT
7
Halo kak, 
8
​
9
Berikut pesanan saya, mohon segera diproses
10
​
11
*Nama:* {{first_name}} {{last_name}}
12
*Telepon:* {{phone}}
13
*Alamat Kirim:* {{address_1}} {{address_2}}
14
*Catatan:*
15
{{note}}
16
​
17
-----------------------------------------
18
{{woo-orderdetail}}     
19
EOT;
20

19
EOT;
20

19
EOT;
20

19
EOT;
20

	public function whatsapp_checkout() {
	    check_ajax_referer( 'solusipress-woo-checkout-wa', 'security' );
	    $checkout = WC_Checkout::instance();
	    $checkout->process_checkout();
	}	
	
	public function checkout_order_processed( $order_id, $posted_data, $order ) { 
        $wa_send_number = $this->wa_number;        
		$customer = array(
			'billing' => $this->set_address( $posted_data ),
			'shipping' => $this->set_address( $posted_data, 'shipping' )
		);
		$fields = array( 'first_name', 'last_name', 'address_1', 'address_2', 'email', 'phone', 'note' );
		$wa_message = $this->wa_message_template;
		if( $wa_message != '' ) {
			foreach( $fields as $f ) {
				if( $f == 'note' ) {
					$wa_message = str_replace( "{{note}}", $posted_data['order_comments'], $wa_message );
				} else {
					$__text = '';
					if( isset( $customer['billing'][$f] ) ) { $__text = $customer['billing'][$f]; }
					$wa_message = str_replace( "{{".$f."}}", $__text, $wa_message );
				}
			}
		}
		$_wa_message = $this->checkout_whatsapp_message();
		if( $_wa_message != '' ) {
			$wa_message = str_replace( "{{woo-orderdetail}}", $_wa_message, $wa_message );
		}
		$redirect_url = '';
		if( $order ) {
			$payment_method = $order->get_payment_method();
			if( WC()->cart->needs_payment() && $payment_method != 'cod' && $payment_method != 'bacs' ) {
				$redirect_url = $order->get_checkout_payment_url();
				$wa_message .= "\n\n";
				$wa_message .= 'Informasi pembayaran ' . $redirect_url;
			} else {
				$redirect_url = $order->get_checkout_order_received_url();
			}            
			WC()->cart->empty_cart();
			WC()->session->set('cart', array());    
		}            
		$return = array(
			'order_id' => $order_id,
			'to_number' => $wa_send_number,
			'wa_message' => urlencode( $wa_message ),
			'redirect' => $redirect_url
		);
		update_post_meta( $order_id, 'order_wa_to_number', $wa_send_number );
		update_post_meta( $order_id, 'order_wa_message', urlencode( $wa_message ) );
		echo json_encode( $return );
		die();
	}
	
    public function set_shipping_fields( $data ) {
        foreach( $data as $key => $value ) {
            if( substr( $key, 0, 8 ) == 'billing_' ) {
                $fld = str_replace( 'billing_', '', $key );
                if( !isset( $data[ 'shipping_' . $fld ] ) ) {
                    $data[ 'shipping_' . $fld ] = $value;
                }
            }
        }
        return $data;
    }
	
	private function set_address( $data, $context='billing' ) {
	    $address_fields = array(
	        'first_name',
	        'last_name',
	        'company',
	        'email',
	        'phone',
	        'address_1',
	        'address_2',
	        'city',
	        'postcode',
	        'state',
	        'country',
	    );
	    $address = array();
	    foreach( $address_fields as $field ) {
	        if( isset( $data[ $context . '_' . $field ] ) ) {
	            $address[ $field ] = $data[ $context.'_'.$field ];               
	        }
	    }
	    return $address;            
	}
	
	private function checkout_whatsapp_message(){
	    $cart = $this->get_cart_items();
	    $shippings = $this->get_shippings();
	    $txt = '';
	    if( !empty( $cart['items'] ) ) {
	        foreach( $cart['items'] as $item ){
	            if( $txt != '' ) $txt .= "\n";
	            if( isset( $item['sku'] ) && trim($item['sku']) != '' ) {
	                if( $txt != '' ) $txt .= "\n";
	                $txt .= "SKU: " . $item['sku'];
	            }
	            $txt .= "\n"."*".$item['name']."*";
	            if( !empty( $item['variations'] ) ) {
	                $txt .= ' - ';
	                $variations = '';
	                foreach( $item['variations'] as $v ) {
	                    if( $variations != '' ) $variations .= ', ';
	                    $variations .= $v['key'].': '.$v['value'];
	                }
	                $txt .= $variations;
	            }            
	            $txt .= "\n";
	            $txt .= ' @ ' . $this->wc_price( $item['price'] );
	            $txt .= ' x ' . $item['quantity'] . ' => ' . 
	                    $this->wc_price( $item['price']*$item['quantity'] );
	        }
	        $txt .= "\n";
	        $txt .= "-----------------------------------------"."\n";
	        $txt .= "*Subtotal* " . $this->wc_price( $cart['subtotal'] );
	        $txt .= "\n"."-----------------------------------------";
	        
	        if( !empty( $cart['coupons']  ) ){
	            foreach ( $cart['coupons'] as $c ){
	                $txt .= "\n";
	                $txt .= '*' . __( 'Coupon: ', 'woocommerce' ) . $c['code'] . '* ' . $this->wc_price( $c['amount'] );
	            }		
	        }
	    }
	    if( $shippings['total'] > 0 ) {
	        $txt .= "\n";
	        $txt .= "*Shipping*";        
	        foreach( $shippings['lines'] as $s ) {
	            $txt .= "\n";
	            $txt .= $s['label'] . ' ' . $this->wc_price( $s['cost']+$s['tax_cost'] );
	        }
	        $txt .= "\n";
	        $txt .= $shippings['address'];
	    } else {
	        $txt .= "\n";
	        $txt .= "*Shipping*";   
	        $txt .= "\n";
	        $txt .= "Total price exclude shipping fee.";
	    }
	    
	    $txt .= "\n";
	    $txt .= "-----------------------------------------"."\n";
	    $txt .= "*TOTAL* " . $this->wc_price( WC()->cart->total );
	    $txt .= "\n"."-----------------------------------------";
	    
	    $txt = str_replace( "&nbsp;"," ", $txt );
    	return $txt;    
	}	
	
    private function get_resend_wa_link( $order_id ){
        $to_number = get_post_meta( $order_id, 'order_wa_to_number', true );
        $message = get_post_meta( $order_id, 'order_wa_message', true );
        $displayed = get_post_meta( $order_id, 'order_wa_resend_link_display', true );
        if( $displayed != 'yes' ) {
            if( $message != '' ) {
                $link_url = 'https://wa.me/'.$to_number.'?text=' . $message;
                $link_text = $this->resend_text;
                echo '<p class="woo-resend-whatsapp"><a href="'.$link_url.'" target="_blank"><strong><i class="fab fa-whatsapp"></i> '. $link_text .'</strong></a></p>';
            }
            update_post_meta( $order_id, 'order_wa_resend_link_display', 'yes' );
        }
    }
    
    public function resend_wa_link_thankyou( $order_id ) {
        echo $this->get_resend_wa_link( $order_id );
    }
    
    public function resend_wa_link( $name, $path, $located, $args ) {
        if( $name == 'checkout/form-pay.php' ) {
            $order_id = $args['order']->get_id();
            echo $this->get_resend_wa_link( $order_id );
        }
    }    	
	
	private function wc_price( $price, $args=array() ) {
		$args = apply_filters(
			'woo_custom_wc_price_args',
			wp_parse_args(
			  $args,
			  array(
				'ex_tax_label'       => false,
				'currency'           => '',
				'decimal_separator'  => wc_get_price_decimal_separator(),
				'thousand_separator' => wc_get_price_thousand_separator(),
				'decimals'           => wc_get_price_decimals(),
				'price_format'       => get_woocommerce_price_format(),
			  )
			)
		);
		$unformatted_price = $price;
		$negative          = $price < 0;
		$price             = apply_filters( 'raw_woocommerce_price', floatval( $negative ? $price * -1 : $price ) );
		$price             = apply_filters( 'formatted_woocommerce_price', number_format( $price, $args['decimals'], $args['decimal_separator'], $args['thousand_separator'] ), $price, $args['decimals'], $args['decimal_separator'], $args['thousand_separator'] );
		if ( apply_filters( 'woocommerce_price_trim_zeros', false ) && $args['decimals'] > 0 ) {
			$price = wc_trim_zeros( $price );
		}
		$formatted_price = ( $negative ? '-' : '' ) . sprintf( $args['price_format'],  get_woocommerce_currency_symbol( $args['currency'] ), $price );
		$return          = $formatted_price;
		if ( $args['ex_tax_label'] && wc_tax_enabled() ) {
			$return .= WC()->countries->ex_tax_or_vat();
		}	
		return apply_filters( 'woo_custom_wc_price', $return, $price, $args, $unformatted_price );	
		return $price;
	}	
	
	private function get_cart_items() {
		$return = array(
			'items' => array(),
			'coupons' => array(),
			'subtotal' => 0,
		);	
		$cart_items = WC()->cart->get_cart();
		if( !empty( $cart_items ) ) {		
			foreach ( $cart_items as $key => $item ) {	
				$product = new WC_product( $item['product_id'] );
				$product_id = $product->get_id();
				$variation_id = null;
				$product_var = null;
				$product_type = $product->get_type();
				$name = $product->get_name();        
				$item_meta = [];
				if( isset( $item['variation_id'] ) && $item['variation_id'] != '' ) {
					$variation = new WC_Product_Variation( $item['variation_id'] );
					$product_var = $item['variation'];
					$product_type = $variation->get_type();
					foreach( $product_var as $k => $v ) {
						$_k = str_replace('attribute_', '', $k);
						$_term = get_term_by( 'slug', $v, $_k );
						if( $_term ) {
							$label = wc_attribute_label( $_term->taxonomy, $product );
							array_push( $item_meta, [
								'key' => $label,
								'value' => $_term->name,
							] );
						} else {
							$label = wc_attribute_label( $_k, $product );
							array_push( $item_meta, [
								'key' => $label,
								'value' => $v
							] );
						}
					}
					$variation_id = $variation->get_id();
					$name = $variation->get_title();
					$weight = $variation->get_weight();
					$sku = $variation->get_sku();
					$price = $variation->get_price();
					$price_html = $variation->get_price_html();
					$attributes = $item['variation'];
				} else {
					$weight = $product->get_weight();    
					$sku = $product->get_sku();
					$price = $product->get_price();
					$price_html = $product->get_price_html();
				}
				array_push( $return['items'], array(
					'product_id' => $product_id,
					'product_type' => $product_type,
					'variation_id' => $variation_id,
					'name' => $name,
					'sku' => $sku,
					'weight' => $weight,
					'price' => $price,
					'quantity' => $item['quantity'],
					'product_var' => $product_var,
					'variations' => $item_meta			
				) );				
			}		
		}
		$subtotal = WC()->cart->subtotal;
		if( $subtotal > 0 ) {
			$return['subtotal'] = $subtotal;
		}
		$coupons = WC()->cart->coupon_discount_totals;
		if( !empty( $coupons ) ) {
			foreach ( $coupons as $code => $amount ){
				array_push( $return['coupons'], array(
					'code' => $code,
					'amount' => $amount,
				) );
			}	
		}
		return $return;
	}

	private function get_shippings(){
		$customer = WC()->session->get( 'customer' );	
		$cart_totals = WC()->session->get( 'cart_totals' );
		$shipping_total = $cart_totals['shipping_total'];		
		$chosen_shipping_methods = WC()->session->get( 'chosen_shipping_methods' );
		$return = array(
			'lines' => array(),
			'address' => null,
			'total' => $shipping_total
		);
		$shipping_dest = null;
		$package_id = '0';
		if ( WC()->session->__isset( 'shipping_for_package_'.$package_id ) ) {
			$pckg = WC()->session->get( 'shipping_for_package_'.$package_id );
			foreach( $pckg['rates'] as $shipping_rate_id => $shipping_rate ){
				if( in_array( $shipping_rate_id, $chosen_shipping_methods ) ) {
					$label_name  = $shipping_rate->get_label();
					$cost = $shipping_rate->get_cost();
					$tax_cost    = $shipping_rate->get_shipping_tax();
					array_push( $return['lines'], array(
						'label' => $label_name,
						'cost' => $cost,
						'tax_cost' => $tax_cost
					) );
					$shipping_dest = $package['destination'];
				}
			}
		}
		$_addr = '';
		$address_parts = array(
			'city' => '',
			'address_2' => '',
			'postcode' => '',
		);
		if( !is_null( $shipping_dest ) ) {
			$_addr = $shipping_dest['city'];
			if( $_addr != '' ) $_addr .= ', ';
			$_addr .= $shipping_dest['address_2'];
			if( $_addr != '' ) $_addr .= ' ';
			$_addr .= $shipping_dest['postcode'];
		} else {
			if( isset( $customer['city'] ) && $customer['city'] != '' ) {
				$address_parts['city'] = $customer['city'];
				$_addr = $customer['city'];
			}
			if( isset( $customer['address_2'] ) && $customer['address_2'] != '' ) {
				$address_parts['address_2'] = $customer['address_2'];
				if( $_addr != '' ) $_addr .= ', ';
				$_addr .= $customer['address_2'];
			}
			if( isset( $customer['postcode'] ) && $customer['postcode'] != '' ) {
				$address_parts['postcode'] = $customer['postcode'];
				if( $_addr != '' ) $_addr .= ' ';
				$_addr .= $customer['postcode'];
			}
		}
		$return['address'] = $_addr;
		$return['address_parts'] = $address_parts;
		return $return;
	}	
}
new SolusiPress_WA_Checkout();

?>