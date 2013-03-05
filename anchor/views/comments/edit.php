<?php echo $header; ?>

<hgroup class="wrap">
	<h1>Editing Comment</h1>
</hgroup>

<section class="wrap">
	<?php echo $messages; ?>

	<form method="post" action="<?php echo Uri::to('admin/comments/edit/' . $comment->id); ?>" novalidate>

		<input name="token" type="hidden" value="<?php echo $token; ?>">

		<fieldset class="split">
			<p>
				<label><?php echo __('comments.name', 'Name'); ?>:</label>
				<?php echo Form::text('name', Input::previous('name', $comment->name)); ?>

				<em><?php echo __('comments.name_explain', 'Author name.'); ?></em>
			</p>

			<p>
				<label><?php echo __('comments.email', 'Email'); ?>:</label>
				<?php echo Form::email('email', Input::previous('email', $comment->email)); ?>

				<em><?php echo __('comments.email_explain', 'Author email.'); ?></em>
			</p>

			<p>
				<label><?php echo __('comments.text', 'Comment'); ?>:</label>
				<?php echo Form::textarea('text', Input::previous('text', $comment->text)); ?>
			</p>

			<p>
				<label><?php echo __('comments.status', 'Status'); ?>:</label>
				<?php echo Form::select('status', $statuses, Input::previous('status', $comment->status)); ?>
			</p>
		</fieldset>

		<aside class="buttons">
			<?php echo Form::button(__('Save Changes.save', 'Save Changes'), array('type' => 'submit', 'class' => 'btn')); ?>

			<?php echo Html::link('admin/comments',
				__('comments.return_comments', 'Return to comments'),
				array('class' => 'btn blue')); ?>
		</aside>
	</form>
</section>

<?php echo $footer; ?>