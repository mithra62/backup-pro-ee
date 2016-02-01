<input type="hidden" value="0" name="gcs_reduced_redundancy" />
<?php 
		
$this->table->add_row(
    '<label for="gcs_access_key">'.$view_helper->m62Lang('gcs_access_key').'</label><div class="subtext">'.$view_helper->m62Lang('gcs_access_key_instructions').'</div>', 
    form_input('gcs_access_key', $form_data['gcs_access_key'], 'id="gcs_access_key"').$view_helper->m62FormErrors($form_errors['gcs_access_key'])
);

$this->table->add_row(
    '<label for="gcs_secret_key">'.$view_helper->m62Lang('gcs_secret_key').'</label><div class="subtext">'.$view_helper->m62Lang('gcs_secret_key_instructions').'</div>', 
    form_password('gcs_secret_key', $form_data['gcs_secret_key'], 'id="gcs_secret_key"').$view_helper->m62FormErrors($form_errors['gcs_secret_key'])
);

$this->table->add_row(
    '<label for="gcs_bucket">'.$view_helper->m62Lang('gcs_bucket').'</label><div class="subtext">'.$view_helper->m62Lang('gcs_bucket_instructions').'</div>', 
    form_input('gcs_bucket', $form_data['gcs_bucket'], 'id="gcs_bucket"').$view_helper->m62FormErrors($form_errors['gcs_bucket'])
);

$this->table->add_row(
    '<label for="gcs_optional_prefix">'.$view_helper->m62Lang('gcs_optional_prefix').'</label><div class="subtext">'.$view_helper->m62Lang('gcs_optional_prefix_instructions').'</div>', 
    form_input('gcs_optional_prefix', $form_data['gcs_optional_prefix'], 'id="gcs_optional_prefix"').$view_helper->m62FormErrors($form_errors['gcs_optional_prefix'])
);

$this->table->add_row(
    '<label for="gcs_reduced_redundancy">'.$view_helper->m62Lang('gcs_reduced_redundancy').'</label><div class="subtext">'.$view_helper->m62Lang('gcs_reduced_redundancy_instructions').'</div>', 
    form_checkbox('gcs_reduced_redundancy', '1', $form_data['gcs_reduced_redundancy'], 'id="gcs_reduced_redundancy"').$view_helper->m62FormErrors($form_errors['gcs_reduced_redundancy'])
);
