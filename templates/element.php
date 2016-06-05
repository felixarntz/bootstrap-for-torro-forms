<?php
$label_class = '';
$field_class = '';
if ( torro()->extensions()->get_registered( 'bootstrap_for_torro_forms' )->is_form_horizontal() ) {
	$label_class = ' class="col-sm-3"';
	$field_class = ' class="col-sm-9"';
}
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php do_action( 'torro_element_start', $element_id ); ?>

	<label for="<?php echo esc_attr( $id ); ?>"<?php echo $label_class; ?>>
		<?php echo esc_html( $label ); ?>
		<?php if ( $required ) : ?>
			<span class="required">*</span>
		<?php endif; ?>
	</label>

	<div<?php echo $field_class; ?>>
		<?php torro()->template( 'element-type', $type ); ?>

		<?php if ( ! empty( $description ) ) : ?>
			<div id="<?php echo esc_attr( $id ); ?>-description" class="element-description help-block">
				<?php echo $description; ?>
			</div>
		<?php endif; ?>

		<?php if ( 0 < count( $errors ) ) : ?>
			<div class="error-messages alert alert-danger" role="alert">
				<?php foreach ( $errors as $error ) : ?>
					<span><?php echo $error; ?></span>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>

	<?php do_action( 'torro_element_end', $element_id ); ?>
</div>