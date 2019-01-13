<span class="fc_form_title">Register New User</span>

<div class="fc_panel">
    <?= $this->Form->create($user) ?>
    <fieldset class="fc-fieldset">
        <legend class="fc-legend"><?= __('PERSONAL INFORMATION') ?></legend>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">First Name</label>
                    <?php echo $this->Form->control('first_name', ['class'=>'form-control', 'placeholder'=>'First Name', 'label'=>false]); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Middle Name</label>
                    <?php echo $this->Form->control('middle_name', ['class'=>'form-control', 'placeholder'=>'Middle Name', 'label'=>false]); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Last Name</label>
                    <?php echo $this->Form->control('last_name', ['class'=>'form-control', 'placeholder'=>'Last Name', 'label'=>false]); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Date of Birth</label>
                    <?php echo $this->Form->control('dob', ['class'=>'form-control date-picker', 'placeholder'=>'Date of Birth', 'label'=>false, 'type'=>'text']); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Blood Group</label>
                    <?php 
                    $blood_group_options['A+']='A+';
                    $blood_group_options['O+']='O+';
                    $blood_group_options['B+']='B+';
                    $blood_group_options['AB+']='AB+';
                    $blood_group_options['A-']='A-';
                    $blood_group_options['O-']='O-';
                    $blood_group_options['B-']='B-';
                    $blood_group_options['AB-']='AB-';
                    echo $this->Form->control('blood_group', ['class'=>'form-control','label'=>false , 'placeholder'=>'Blood Group', 'options'=>$blood_group_options]); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Gender</label>
                    <?php echo $this->Form->control('gender', ['class'=>'form-control','label'=>false , 'placeholder'=>'Gender']); ?>
                    <div class="form-group">
                        <div class="radio-list">
                            <label class="radio-inline">
                            <input type="radio" id="inlineCheckbox21" value="option1"> Checkbox 1 </label>
                            <label class="radio-inline">
                            <input type="radio" id="inlineCheckbox22" value="option2"> Checkbox 2 </label>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Contact Number</label>
                    <?php echo $this->Form->control('contact_number', ['class'=>'form-control', 'placeholder'=>'Contact Number', 'label'=>false, 'type'=>'text']); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Email</label>
                    <?php echo $this->Form->control('email', ['class'=>'form-control','label'=>false , 'placeholder'=>'Email']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Parent Full Name</label>
                    <?php echo $this->Form->control('parent_full_name', ['class'=>'form-control', 'placeholder'=>'Parent Full Name', 'label'=>false, 'type'=>'text']); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Parent Contact Number</label>
                    <?php echo $this->Form->control('parent_contact_number', ['class'=>'form-control','label'=>false , 'placeholder'=>'Parent Contact Number']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Address</label>
                    <?php echo $this->Form->control('address', ['class'=>'form-control', 'placeholder'=>'Address', 'label'=>false]); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="fc_label">Remark</label>
                    <?php echo $this->Form->control('remark', ['class'=>'form-control','label'=>false , 'placeholder'=>'Remark']); ?>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="row">
        <div class="col-md-6">
            <fieldset class="fc-fieldset">
                <legend class="fc-legend"><?= __('ACADEMY INFORMATION') ?></legend>
                
                <div class="form-group">
                    <label class="fc_label">Epicenter</label>
                    <?php echo $this->Form->control('epicenter', ['class'=>'form-control', 'placeholder'=>'Epicenter', 'label'=>false]); ?>
                </div>
                <div class="form-group">
                    <label class="fc_label">Center</label>
                    <?php echo $this->Form->control('center', ['class'=>'form-control', 'placeholder'=>'Center', 'label'=>false]); ?>
                </div>
            </fieldset>
        </div>
        <div class="col-md-6">
            <fieldset class="fc-fieldset">
                <legend class="fc-legend"><?= __('SOCIAL INFORMATION') ?></legend>
                
                <div class="form-group">
                    <label class="fc_label">Facebook</label>
                    <?php echo $this->Form->control('facebook', ['class'=>'form-control', 'placeholder'=>'Facebook', 'label'=>false]); ?>
                </div>
                <div class="form-group">
                    <label class="fc_label">Instagram</label>
                    <?php echo $this->Form->control('instagram', ['class'=>'form-control', 'placeholder'=>'Instagram', 'label'=>false]); ?>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <fieldset class="fc-fieldset">
                <legend class="fc-legend"><?= __('OFFICIAL INFORMATION') ?></legend>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="fc_label">Set Password</label>
                            <?php echo $this->Form->control('password', ['class'=>'form-control', 'placeholder'=>'Set Password', 'label'=>false]); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="fc_label">Confirm Password</label>
                            <?php echo $this->Form->control('password2', ['class'=>'form-control', 'placeholder'=>'Confirm Password', 'label'=>false]); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="fc_label">Registration Location</label>
                            <?php echo $this->Form->control('registration_location', ['class'=>'form-control', 'placeholder'=>'Registration Location', 'label'=>false]); ?>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <?php
            echo $this->Form->control('profile_pic');
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>



<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>


<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS']); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS']); ?>


<?php echo $this->Html->script('/assets/admin/pages/scripts/components-pickers.js', ['block' => 'PAGE_LEVEL_SCRIPTS']); ?>

<?php
$js="
$(document).ready(function() {
    ComponentsPickers.init();
});
";
echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom')); 
?>
