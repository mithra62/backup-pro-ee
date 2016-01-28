<?php
$this->table->add_row(
    '<label for="dropbox_access_token">'.$view_helper->m62Lang('dropbox_access_token').'</label><div class="subtext">'.$view_helper->m62Lang('dropbox_access_token_instructions').'</div>',
    form_password('dropbox_access_token', $form_data['dropbox_access_token'], 'id="dropbox_access_token"').$view_helper->m62FormErrors($form_errors['dropbox_access_token'])
);

$this->table->add_row(
    '<label for="dropbox_app_secret">'.$view_helper->m62Lang('dropbox_app_secret').'</label><div class="subtext">'.$view_helper->m62Lang('dropbox_app_secret_instructions').'</div>', 
    form_password('dropbox_app_secret', $form_data['dropbox_app_secret'], 'id="dropbox_app_secret"').$view_helper->m62FormErrors($form_errors['dropbox_app_secret'])
);

$this->table->add_row(
    '<label for="dropbox_prefix">'.$view_helper->m62Lang('dropbox_prefix').'</label><div class="subtext">'.$view_helper->m62Lang('dropbox_prefix_instructions').'</div>',
    form_input('dropbox_prefix', $form_data['dropbox_prefix'], 'id="dropbox_prefix"').$view_helper->m62FormErrors($form_errors['dropbox_prefix'])
);