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
				<legend><?= @text('Details'); ?></legend>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('Title'); ?></label>
					<div class="controls">
						<input class="required" type="text" name="title" size="32" maxlength="255" value="<?= $form->title; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('Slug'); ?></label>
					<div class="controls">
						<input type="text" name="slug" size="32" maxlength="255" value="<?= $form->slug; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('Form'); ?></label>
					<div class="controls">
						<?= @helper('listbox.forms', array()); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name"><?= @text('Show title'); ?></label>
					<div class="controls">
						<?= @helper('select.booleanlist', array('name' => 'show_titles', 'selected' => $form->show_titles)); ?>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
</form>