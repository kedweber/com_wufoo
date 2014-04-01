<?php
/**
 * Com
 *
 * @author      Dave Li <dave@moyoweb.nl>
 * @category    Nooku
 * @package     Socialhub
 * @subpackage  ...
 * @uses        Com_
 */
 
defined('KOOWA') or die('Protected resource'); ?>

<div class="form-group">
	<? if($form->show_titles) : ?>
		<label><?= $field['title']; ?></label>
	<? endif; ?>

	<? foreach($field['subfields'] as $subfield) : ?>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="<?= $subfield['ID']; ?>" value="<?= $subfield['DefaultVal']; ?>"> <?= $subfield['Label']; ?>
			</label>
		</div>
	<? endforeach; ?>
</div>