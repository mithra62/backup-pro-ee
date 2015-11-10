<?php 	
$this->table->add_row(
    '<label for="sftp_host">'.$view_helper->m62Lang('sftp_host').'</label><div class="subtext">'.$view_helper->m62Lang('sftp_host_instructions').'</div>', 
    form_input('sftp_host', $form_data['sftp_host'], 'id="sftp_host"').m62_form_errors($form_errors['sftp_host'])
);

$this->table->add_row(
    '<label for="sftp_username">'.$view_helper->m62Lang('sftp_username').'</label><div class="subtext">'.$view_helper->m62Lang('sftp_username_instructions').'</div>', 
    form_input('sftp_username', $form_data['sftp_username'], 'id="sftp_username"').m62_form_errors($form_errors['sftp_username'])
);

$this->table->add_row(
    '<label for="sftp_password">'.$view_helper->m62Lang('sftp_password').'</label><div class="subtext">'.$view_helper->m62Lang('sftp_password_instructions').'</div>', 
    form_password('sftp_password', $form_data['sftp_password'], 'id="sftp_password"').m62_form_errors($form_errors['sftp_password'])
);

$this->table->add_row(
    '<label for="sftp_private_key">'.$view_helper->m62Lang('sftp_private_key').'</label><div class="subtext">'.$view_helper->m62Lang('sftp_private_key_instructions').'</div>',
    form_input('sftp_private_key', $form_data['sftp_private_key'], 'id="sftp_private_key"').m62_form_errors($form_errors['sftp_private_key'])
);

$this->table->add_row(
    '<label for="sftp_port">'.$view_helper->m62Lang('sftp_port').'</label><div class="subtext">'.$view_helper->m62Lang('sftp_port_instructions').'</div>', 
    form_input('sftp_port', $form_data['sftp_port'], 'id="sftp_port"').m62_form_errors($form_errors['sftp_port'])
);

$this->table->add_row(
    '<label for="sftp_root">'.$view_helper->m62Lang('sftp_root').'</label><div class="subtext">'.$view_helper->m62Lang('sftp_root_instructions').'</div>', 
    form_input('sftp_root', $form_data['sftp_root'], 'id="sftp_root"').m62_form_errors($form_errors['sftp_root'])
);

$this->table->add_row(
    '<label for="sftp_timeout">'.$view_helper->m62Lang('sftp_timeout').'</label><div class="subtext">'.$view_helper->m62Lang('sftp_timeout_instructions').'</div>',
    form_input('sftp_timeout', $form_data['sftp_timeout'], 'id="sftp_timeout"').m62_form_errors($form_errors['sftp_timeout'])
);