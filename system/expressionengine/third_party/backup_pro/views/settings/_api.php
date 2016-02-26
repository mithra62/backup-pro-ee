<p><?=$view_helper->m62Lang('rest_api_instructions')?></p>
<input type="hidden" value="0" name="enable_rest_api" />
<h3  class="accordion"><?=$view_helper->m62Lang('rest_api_details')?></h3>

<div>
	<?php 
	
	$this->table->set_heading($view_helper->m62Lang('setting'),$view_helper->m62Lang('value'));
	$this->table->add_row(
	    '<label for="working_directory">'.$view_helper->m62Lang('rest_api_route_entry').'</label>', 
	    '<a href="'.$rest_api_route_entry.'">'.$rest_api_route_entry.'</a>'
    );
	
	$this->table->add_row(
        '<label for="enable_rest_api">'.$view_helper->m62Lang('enable_rest_api').'</label><div class="subtext">'.$view_helper->m62Lang('enable_rest_api_instructions').'</div>', 
	    form_checkbox('enable_rest_api', '1', $form_data['enable_rest_api'], 'id="enable_rest_api"').$view_helper->m62FormErrors($form_errors['enable_rest_api'])
	);
	
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>

<div id="rest_api_wrap" style="display:none; ">
    <p><?php echo $view_helper->m62Lang('rest_api_credentials_instructions'); ?></p>
    <h3  class="accordion"><?=$view_helper->m62Lang('rest_api_credentials')?></h3>
    
    
	<?php 
	
	$this->table->set_heading($view_helper->m62Lang('setting'),$view_helper->m62Lang('value'));
	$this->table->add_row(
	    '<label for="api_key">'.$view_helper->m62Lang('api_key').'</label><div class="subtext">'.$view_helper->m62Lang('api_key_instructions').'</div>', 
	    form_input('api_key', $form_data['api_key'], 'id="api_key"').$view_helper->m62FormErrors($form_errors['api_key'])
    );
	
	$this->table->add_row(
	    '<label for="api_secret">'.$view_helper->m62Lang('api_secret').'</label><div class="subtext">'.$view_helper->m62Lang('api_secret_instructions').'</div>',
	    form_input('api_secret', $form_data['api_secret'], 'id="api_secret"').$view_helper->m62FormErrors($form_errors['api_secret'])
	);	
	
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>