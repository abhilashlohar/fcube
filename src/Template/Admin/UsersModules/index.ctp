<?php
/**
 * @author: Sonia solanki
 * @date:  Sep 01, 2018
 * @version: 1.0.0
 */
?>
<?php echo $this->Flash->render(); ?>
<?= $this->Form->create($usermodule); ?>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption text-uppercase"><?= $page_title; ?></div>
    </div>
          <div class="portlet-body">
 <div class="tabbable-bordered">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <?= $this->Form->control('user_ids', ['label' => ['text' => __('User'), 'class' => 'control-label'], 'class' => 'form-control', 'empty' => __('Select One'), 'options' => $users, 'templates' => 'form_bootstrap']); ?>
                        </div>
                    
                        <div class="col-xs-12 col-sm-6 school-rights" style="display: none;">
                          <?= $this->Form->control('institutes[][institute_id]', ['label' =>  ['text' => __('School Rights'), 'class' => 'control-label'],  'options' => $institutes,'default' => '','class' => 'form-control bs-select','multiple']) ?>
                        </div>
                    </div>
                    <div id="loader" style='color:green;'></div>
                
                <div id="module_details">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Module Name</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                       
                    </div>
                </div>
                 
                    <?= $this->Form->button($this->Html->tag('i', '', ['class' => 'fa fa-check']) .
                            __(' Save Rights'), ['escape' => false, 'class' => 'btn btn-primary']);
                    ?>
                
            </div>
        </div>
    </div>
<?= $this->Form->end(); ?>
<?=
$this->Html->scriptBlock("
$(document).on('change', '#user-ids', function() {
    $.ajax({
        method: 'POST',
        url: '" . $this->Url->build(['controller' => 'UsersModules', 'action' => 'fillModules']) . "',
        dataType: 'html',
        data:{user_id:$('#user-ids').val()},
        cache: false,
        beforeSend: function() {
            $('#ajax-indicator').fadeIn();
            $('#loader').html('Please wait...');
            $('.btn-add-more-attachment').hide();
            $('#attachment_details tbody').html('');
             $('#fields-cases').hide();
        }
    }).done(function(data) {
        $('#loader').html('');
        $('#module_details tbody').html(data);
        $('#fields-cases').show();
    }).always(function() {
        $('#ajax-indicator').fadeOut();
    });
    return false;
});

$(document).on('change', '#user-ids', function() {
    $.ajax({
        method: 'POST',
        url: '" . $this->Url->build(['controller' => 'UsersModules', 'action' => 'fillInstitutes']) . "',
        dataType: 'json',
        data:{user_id:$('#user-ids').val()},
        cache: false,
        beforeSend: function() {
            $('#ajax-indicator').fadeIn();
            $('#loader').html('Please wait...');
            $('.school-rights').hide();
        }
    }).done(function(data) {
        $('#loader').html('');
        $('.school-rights').show();
        var arr = [];
        $.each(data, function(i, item) {       
        arr.push(i);
       })
        $('.bs-select').selectpicker('val', arr);
        $('.bs-select').selectpicker('refresh');
    }).always(function() {
        $('#ajax-indicator').fadeOut();
    });
    return false;
});

", ['block' => true]);
