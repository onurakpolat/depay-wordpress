<?php defined( 'ABSPATH' ) or die; ?>
<div class="depay-widget" data-amount="<?php esc_attr_e( $amount ); ?>" data-token="<?php esc_attr_e( $token ); ?>" data-receiver="<?php esc_attr_e( $receiver ); ?>">
	<button class="btn button pulse-button-hover"><?php echo $button_label; ?></button>
</div>