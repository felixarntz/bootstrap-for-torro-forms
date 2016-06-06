<?php
/**
 * Template: element-type-textarea.php
 *
 * Available data: $element_id, $type, $id, $name, $classes, $description, $required, $answers, $response, $extra_attr, $limits_text
 *
 * @package TFBS3
 * @subpackage Templates
 * @author Felix Arntz <felix-arntz@leaves-and-love.net>
 * @since 1.0.0
 */

$aria_required = $required ? ' aria-required="true"' : '';
?>
<textarea id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>"<?php echo $extra_attr; ?> aria-describedby="<?php echo esc_attr( $id ); ?>-description <?php echo esc_attr( $id ); ?>-errors"<?php echo $aria_required; ?>><?php echo esc_html( $response ); ?></textarea>

<?php if ( ! empty( $limits_text ) ) : ?>
	<div class="limits-text help-block">
		<?php echo esc_html( $limits_text ); ?>
	</div>
<?php endif; ?>
