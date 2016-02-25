<div class="bp_top_nav">
	<div class="bp_nav">

		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'general' ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section=general'; ?>"><?php echo $view_helper->m62Lang('general_bp_settings_menu'); ?></a>
		</span>
		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'db' ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section=db'; ?>"><?php echo $view_helper->m62Lang('db_bp_settings_menu'); ?></a>
		</span>
		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'files' ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section=files'; ?>"><?php echo $view_helper->m62Lang('files_bp_settings_menu'); ?></a>
		</span>
		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'cron' ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section=cron'; ?>"><?php echo $view_helper->m62Lang('cron_bp_settings_menu'); ?></a>
		</span>
		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'storage' ? 'current' : ''); ?>" href="<?php echo $url_base.'view_storage'; ?>"><?php echo $view_helper->m62Lang('storage_location_bp_settings_menu'); ?></a>
		</span>
		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'integrity_agent' ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section=integrity_agent'; ?>"><?php echo $view_helper->m62Lang('integrity_agent_bp_settings_menu'); ?></a>
		</span>
		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'api' ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section=api'; ?>"><?php echo $view_helper->m62Lang('rest_api_bp_settings_menu'); ?></a>
		</span>
		<span class="button"> 
			<a class="nav_button <?php echo ($section == 'license' ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section=license'; ?>"><?php echo $view_helper->m62Lang('license_details'); ?></a>
		</span>			
	</div>
</div>