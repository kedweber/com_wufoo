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

<? $filter = $this->getService('koowa:filter.slug'); ?>

<div class="form-group">
	<? if($form->show_titles) : ?>
		<label><?= $field['title']; ?></label>
	<? endif; ?>

	<div class="form-group">
		<div class="form-group">
			<input type="text" class="form-control" <?= $field['subfields'][0]['isrequired'] ? 'required': null; ?> name="<?= $subfield['subfields'][0]['ID']; ?>" value="<?= $subfield['subfields'][0]['DefaultVal']; ?>">
			<? if($form->show_titles) : ?>
				<span style="display: block;"><?= @text(strtoupper(str_replace('-', '_', $filter->sanitize($field['subfields'][0]['Label'])))); ?></span>
			<? endif; ?>
		</div>
	</div>
	<div class="form-group">
		<div class="form-group">
			<input type="text" class="form-control" <?= $field['subfields'][1]['isrequired'] ? 'required': null; ?> name="<?= $subfield['subfields'][1]['ID']; ?>" value="<?= $subfield['subfields'][1]['DefaultVal']; ?>">
			<? if($form->show_titles) : ?>
				<span style="display: block;"><?= @text(strtoupper(str_replace('-', '_', $filter->sanitize($field['subfields'][1]['Label'])))); ?></span>
			<? endif; ?>
		</div>
	</div>
	<div class="form-inline">
		<div class="form-group">
			<input type="text" class="form-control" <?= $field['subfields'][2]['isrequired'] ? 'required': null; ?> name="<?= $subfield['subfields'][2]['ID']; ?>" value="<?= $subfield['subfields'][2]['DefaultVal']; ?>">
			<? if($form->show_titles) : ?>
				<span style="display: block;"><?= @text(strtoupper(str_replace('-', '_', $filter->sanitize($field['subfields'][2]['Label'])))); ?></span>
			<? endif; ?>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" <?= $field['subfields'][3]['isrequired'] ? 'required': null; ?> name="<?= $subfield['subfields'][3]['ID']; ?>" value="<?= $subfield['subfields'][3]['DefaultVal']; ?>">
			<? if($form->show_titles) : ?>
				<span style="display: block;"><?= @text(strtoupper(str_replace('-', '_', $filter->sanitize($field['subfields'][3]['Label'])))); ?></span>
			<? endif; ?>
		</div>
	</div>
	<div class="form-inline">
		<div class="form-group">
			<input type="text" class="form-control" <?= $field['subfields'][4]['isrequired'] ? 'required': null; ?> name="<?= $subfield['subfields'][4]['ID']; ?>" value="<?= $subfield['subfields'][4]['DefaultVal']; ?>">
			<? if($form->show_titles) : ?>
				<span style="display: block;"><?= @text(strtoupper(str_replace('-', '_', $filter->sanitize($field['subfields'][4]['Label'])))); ?></span>
			<? endif; ?>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" <?= $field['subfields'][5]['isrequired'] ? 'required': null; ?> name="<?= $subfield['subfields'][5]['ID']; ?>" value="<?= $subfield['subfields'][5]['DefaultVal']; ?>">
			<? if($form->show_titles) : ?>
				<span style="display: block;"><?= @text(strtoupper(str_replace('-', '_', $filter->sanitize($field['subfields'][5]['Label'])))); ?></span>
			<? endif; ?>
		</div>
	</div>
</div>