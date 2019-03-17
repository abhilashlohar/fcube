<?php $key = 0; 
if (!empty($modules)){ ?>
    <?php foreach ($modules as $key => $module):
       if(!empty($module->users_modules)){
            $add = $module->users_modules[0]['m_add'];
            $edit = $module->users_modules[0]['m_edit'];
            $view = $module->users_modules[0]['m_view'];
            $delete = $module->users_modules[0]['m_delete'];
        }else{
            $add = 0;
            $edit = 0;
            $view = 0;
            $delete = 0;
        }
        if($add == 0){ $add_class = ''; }else{ $add_class = 'checked'; }
        if($edit == 0){ $edit_class = ''; }else{ $edit_class = 'checked'; }
        if($view == 0){ $view_class = ''; }else{ $view_class = 'checked'; }
        if($delete == 0){ $delete_class = ''; }else{ $delete_class = 'checked'; }
        ?>
       
       <tr>
            <td>
             <?= $this->Form->hidden('users_modules.' . $key . '.module_id',['value' => $module->id]); ?>
            <?= $module->name; ?>
            </td>
            <td>
                <?= $this->Form->checkbox('users_modules.' . $key . '.m_add', [$add_class ,'templates' => 'form_bootstrap', ]); ?>
            </td> 
            <td>
                <?= $this->Form->checkbox('users_modules.' . $key . '.m_edit', [$edit_class ,'templates' => 'form_bootstrap']); ?>
            </td>
            <td>
                <?= $this->Form->checkbox('users_modules.' . $key . '.m_view', [$view_class ,'templates' => 'form_bootstrap']); ?>
            </td>
            <td>
                <?= $this->Form->checkbox('users_modules.' . $key . '.m_delete', [$delete_class ,'templates' => 'form_bootstrap']); ?>
            </td> 
        </tr>
    <?php endforeach;
    $key++; ?>
<?php }else{
    $key = 0;
} ?>

<script>
    var totalRowsAttachment = '<?php echo $key; ?>';
</script>
<?= $this->fetch('postLink'); ?>
