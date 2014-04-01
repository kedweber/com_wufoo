<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>

<!--
<script src="media://lib_koowa/js/koowa.js" />
-->

<form action="" method="post" class="-koowa-form" data-toolbar=".toolbar-list">
	<div class="row-fluid">
		<div class="span6">
			<fieldset class="form-horizontal">
				<legend><?= @text('DETAILS'); ?></legend>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('TITLE'); ?></label>
					<div class="controls">
						<input class="required" type="text" name="title" size="32" maxlength="255" value="<?= $form->title; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('SLUG'); ?></label>
					<div class="controls">
						<input type="text" name="slug" size="32" maxlength="255" value="<?= $form->slug; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('FORM'); ?></label>
					<div class="controls">
						<?= @helper('listbox.wufoo_forms', array()); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('SHOW_TITLES'); ?></label>
					<div class="controls">
						<?= @helper('select.booleanlist', array('name' => 'show_titles', 'selected' => $form->show_titles)); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('SUBMIT_BUTTON'); ?></label>
					<div class="controls">
						<input type="text" name="button_submit" size="32" maxlength="255" value="<?= $form->button_submit; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('SUCCES_MESSAGE'); ?></label>
					<div class="controls">
						<?= @editor(array(
							'name' => 'message_success',
							'width' => '100%',
							'buttons' => false,
							'options' => array('theme' => 'simple', 'pagebreak', 'readmore')));
						?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('ERROR_MESSAGE'); ?></label>
					<div class="controls">
						<?= @editor(array(
							'name' => 'message_error',
							'width' => '100%',
							'buttons' => false,
							'options' => array('theme' => 'simple', 'pagebreak', 'readmore')));
						?>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
</form>