<?php
if(count($errors) >= 1)
{
	
	foreach($errors AS $key => $error)
	{
		echo '<div class="backup_pro_system_error" id="backup_pro_system_error_'.$key.'">';
        echo $view_helper->m62Lang($error);
		
		if( $key == 'no_storage_locations_setup' )
		{
		    echo ' <a href="'.$url_base.'new_storage&engine=local">'.$view_helper->m62Lang('setup_storage_location').'</a>';
		}
		elseif( $key == 'license_number' )
		{
		    echo ' <a href="'.$url_base.'settings&section=license">'.$view_helper->m62Lang('enter_license').'</a> or <a href="https://mithra62.com/projects/view/backup-pro">'.$view_helper->m62Lang('purchase_a_license').'</a>';
		}
	    elseif( $error == 'invalid_working_directory' )
	    {
	        echo ' <a href="'.$url_base.'settings">'.$view_helper->m62Lang('check_working_dir').'</a>';
	    }
	    elseif( $error == 'no_db_backups_exist_yet' )
	    {
	        echo ' <a href="'.$url_base.'backup&type=database">'.$view_helper->m62Lang('would_you_like_to_backup_database_now').'</a>';
	    }
	    elseif( $error == 'no_file_backups_exist_yet' )
	    {
	        echo ' <a href="'.$url_base.'backup&type=files">'.$view_helper->m62Lang('would_you_like_to_backup_files_now').'</a>';
	    }
	    elseif( $error == 'db_backup_past_expectation_stub' || $error == 'file_backup_past_expectation_stub' )
	    {
	        if( $error == 'db_backup_past_expectation_stub' )
	        {
	            $lang = sprintf(
	                $view_helper->m62Lang('db_backup_past_expectation'),
	                $view_helper->getRelativeDateTime($backup_meta['database']['newest_backup_taken_raw'], false),
	                $url_base.'backup&type=database'
	            );
	        }
	        else if ( $error == 'file_backup_past_expectation_stub' )
	        {
	            $lang = sprintf(
	                $view_helper->m62Lang('file_backup_past_expectation'),
	                $view_helper->getRelativeDateTime($backup_meta['files']['newest_backup_taken_raw'], false),
	                $url_base.'backup&type=files'
	            );
	        }
	        echo $lang;
	    }		
		
		echo '</div>';
	}
}