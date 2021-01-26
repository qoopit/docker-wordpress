<?php
function blogshop_helper_bar() {
        ?>
        <div class="blogshop-admin-notice notice is-dismissible">
            <a href="?blogshop_notice_dismiss" target="_self" class="blogshop-notice-dismiss"><span class="screen-reader-text">Dissmiss</span></a>
            <p style="font-size:16px; font-weight: 600;"><?php echo wp_kses_post('Thank you for choosing blogshop WordPress theme for your website.');?>
                <a href="<?php echo esc_url('https://theimran.com/themes/wordpress-theme/wordpress-theme-for-blogging-and-ecommerce-store/');?>" style="background-color: #f16334; border-color: #f16334" class="button button-primary"><?php esc_html_e('Upgrade To Pro', 'blogshop');?></a>
                <a href="<?php echo esc_url('https://theimran.com/themes/wordpress-theme/wordpress-theme-for-blogging-and-ecommerce-store/');?>" style="background-color: #f16334; border-color: #f16334" class="button button-primary"><?php esc_html_e('View Our All Themes Bundle', 'blogshop');?></a>
                <a href="<?php echo esc_url('https://theimran.com/contact');?>" style="background-color: #f16334; border-color: #f16334" class="button button-primary"><?php esc_html_e('Supports', 'blogshop');?></a>
            </p>
        </div>
        <?php
}
add_action('admin_notices', 'blogshop_helper_bar');
