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
		<label class="col-sm-2 control-label"><?= $field['title']; ?></label>
	<? endif; ?>
	<div class="col-sm-4">
		<input type="text" class="form-control" <?= $field['isrequired'] ? 'required': null; ?> name="<?= $field['id']; ?>" placeholder="<?= $field['instructions']; ?>">
	</div>
</div>