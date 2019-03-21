<?= $this->Flash->render(); ?>
<div class="portlet box red">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i> <?= $page_title; ?>
		</div>
	</div>
	<div class="portlet-body form">
		<?= $this->Form->create($user); ?>
			<div class="form-body">
				<div class="form-group">
					<?= $this->Form->control('name', ['label' => ['text' => __('Name'), 'class' => 'control-label'], 'class' => 'form-control', 'templates' => 'form_bootstrap']); ?>
				</div>
				<div class="form-group">
					<?= $this->Form->control('email', ['label' => ['text' => __('Email'), 'class' => 'control-label'], 'class' => 'form-control', 'templates' => 'form_bootstrap']) ?>
				</div>
				<div class="form-group">
					<?= $this->Form->control('mobile', ['label' => ['text' => __('Mobile'), 'class' => 'control-label'], 'class' => 'form-control', 'templates' => 'form_bootstrap']); ?>
				</div>
				<div class="form-group">
					   <?php $options = ['1' => 'Active', '0' => 'Inactive']; ?>
                    <?= $this->Form->control('status', ['label' => ['text' => __('Status'), 'class' => 'control-label'], 'class' => 'form-control', 'options' => $options, 'empty' => __('Select Status'), 'default' => 1, 'required' => true, 'templates' => 'form_bootstrap']); ?>
				</div>
				<div class="form-group">
					<?= $this->Form->control('password', ['label' => ['text' => __('Password'), 'class' => 'control-label'], 'class' => 'form-control', 'templates' => 'form_bootstrap', 'templateVars' => ['labelIcon' => __('Password')]]) ?>
				</div>
				<div class="form-group">
					<?= $this->Form->control('confirm_password', ['label' => ['text' => __('Confirm Password'), 'class' => 'control-label'], 'class' => 'form-control', 'type' => 'password', 'templates' => 'form_bootstrap']) ?>
				</div>
				<div class="form-group">
					<?php $options = ['Admin' => 'Admin', 'Editor' => 'Editor']; ?>
                    <?= $this->Form->control('role', ['label' => ['text' => __('Role'), 'class' => 'control-label'], 'class' => 'form-control', 'options' => $options, 'empty' => __('Select Role'), 'templates' => 'form_bootstrap']); ?>
				</div>

			</div>
			<div class="form-actions right">
				 <?= $this->Form->button($this->Html->tag('i', '', ['class' => 'fa fa-check']).
                __(' Save User'), ['escape' => false, 'class' => 'btn btn-success']); ?>
			</div>
		<?= $this->Form->end(); ?>
	</div>
</div>