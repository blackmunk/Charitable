<?php
/**
 * The template used to display date form fields.
 *
 * @author 	Studio 164a
 * @since 	1.0.0
 * @version 1.0.0
 */

if ( ! isset( $view_args[ 'form' ] ) || ! isset( $view_args[ 'field' ] ) ) {
	return;
}

$form 			= $view_args[ 'form' ];
$field 			= $view_args[ 'field' ];
$classes 		= $view_args[ 'classes' ];
$is_required 	= isset( $field[ 'required' ] ) 	? $field[ 'required' ] 		: false;
$value			= isset( $field[ 'value' ] ) 		? $field[ 'value' ] 		: '';
$placeholder 	= isset( $field[ 'placeholder' ] ) 	? $field[ 'placeholder' ] 	: '';
?>
<div id="charitable_field_<?php echo $field['key'] ?>" class="<?php echo $classes ?>">
	<?php if ( isset( $field['label'] ) ) : ?>
		<label for="charitable_field_<?php echo $field['key'] ?>">
			<?php echo $field['label'] ?>
			<?php if ( $is_required ) : ?>
				<abbr class="required" title="required">*</abbr>
			<?php endif ?>
		</label>
	<?php endif ?>
	<input type="text" name="<?php echo $field['key'] ?>" value="<?php echo $value ?>" placeholder="<?php echo $placeholder ?>" />
</div>