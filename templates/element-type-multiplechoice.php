<?php
/**
 * Template: element-type-multiplechoice.php
 *
 * Available data: $element_id, $type, $id, $name, $classes, $description, $required, $answers, $response, $has_error, $has_success, $extra_attr, $limits_text
 *
 * @package TFBS3
 * @subpackage Templates
 * @author Felix Arntz <felix-arntz@leaves-and-love.net>
 * @since 1.0.0
 */

$aria_describedby = ' aria-describedby="' . esc_attr( $id ) . '-description' . ( $has_error ? ' ' . esc_attr( $id ) . '-errors' : '' ) . '"';
$aria_invalid = $has_error ? ' aria-invalid="true"' : '';
$aria_required = $required ? ' aria-required="true"' : '';
$wrap_class = torro()->extensions()->get_registered( 'torro_forms_bootstrap_markup' )->is_group_inline() ? 'checkbox-inline' : 'checkbox';
?>
<?php foreach ( $answers as $i => $answer ) : ?>
	<div class="torro_element_checkbox <?php echo $wrap_class; ?>">
		<?php $checked = is_array( $response ) && in_array( $answer['value'], $response, true ) ? ' checked' : ''; ?>
		<input type="checkbox" id="<?php echo esc_attr( $id ) . '-' . $i; ?>" name="<?php echo esc_attr( $name ); ?>[]" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" value="<?php echo esc_attr( $answer['value'] ); ?>"<?php echo $checked . $aria_describedby; ?>>
		<label for="<?php echo esc_attr( $id ) . '-' . $i; ?>">
			<?php echo esc_html( $answer['label'] ); ?>
		</label>
	</div>
<?php endforeach; ?>

<?php if ( ! empty( $limits_text ) ) : ?>
	<div class="limits-text help-block">
		<?php echo esc_html( $limits_text ); ?>
	</div>
<?php endif; ?>
