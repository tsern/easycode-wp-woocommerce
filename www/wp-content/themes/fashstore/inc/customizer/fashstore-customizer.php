<?php
if( class_exists( 'WP_Customize_control') ){
class AccessPress_Store_Theme_Info_Custom_Control extends WP_Customize_Control{
    public function render_content(){ ?>
        <label>
        	<div class="user_sticky_note">
    	        <span class="sticky_info_row"><a class="button" href="http://demo.accesspressthemes.com/fashstore/" target="_blank">Live Demo</a>
    	        <span class="sticky_info_row"><a class="button" href="http://doc.accesspressthemes.com/accespress-store-doc/" target="_blank">Documentation</a></span>
    	        <span class="sticky_info_row"><a class="button" href="https://accesspressthemes.com/support/forum/themes/free-themes/theme-accesspress-store/" target="_blank">Support Forum</a></span>
    	        <span class="sticky_info_row"><a class="button" href="https://www.youtube.com/watch?v=Czj2XF6tuU0&list=PLdSqn2S_qFxG-DoVjc-Dp2Z-FpNg7BHwa" target="_blank">Video Tutorial</a></span>
    	        <span class="sticky_info_row"><a class="button" href="http://wpall.club/" target="_blank">More WordPress Resources<a/></span>
	        </div>
            <h2 class="customize-title"><?php echo esc_html( $this->label ); ?></h2>
            <span class="customize-text_editor_desc">                  
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/fashstorepro-thumb.jpg"/>
                <ul class="admin-pro-feature-list">   
                    <li><span><?php esc_html_e('Fully built on customizer!','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Next generation WooCommerce theme','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Deep WooCommerce Integration!','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Advanced product search','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Boxed and full layout','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Unlimited slider options','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Background configuration','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Color configuration','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Highly configurable home page','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Youtube video integration','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Multiple Category display layout','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Product and content search','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Promo Ticker','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Unlimited SSL Badge and credit card icons upload','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('WooCommerce settings','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('4 WooCommerce Archive layout','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('4 Page layout','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('4 Post layout','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Grid / list Archive view','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('4 Blog layout','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('14 Widgets','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Page banner','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Beautiful product page','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Beautiful checkout pages','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Widget for latest product with accordance','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Tab section to show category','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Tab section to show products','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Team section','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Testimonial section','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Client Logo Section','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Fully SEO optimized','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('Fast loading','fashstore'); ?> </span></li>
                    <li><span><?php esc_html_e('A perfect theme to start your online shop of any kind!','fashstore'); ?> </span></li>
                </ul>
                <?php $buy_now = 'https://accesspressthemes.com/wordpress-themes/fashstore-pro/'; ?>
                <a href="<?php echo esc_url( $buy_now ); ?>" class="button button-primary buynow" target="_blank"><?php esc_html_e('Buy Now','fashstore'); ?></a>
            </span>
        </label>
        <?php
    }
}
}