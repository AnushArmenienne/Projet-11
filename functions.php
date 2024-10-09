<?php

function MOTA_add_admin_pages() {
add_menu_page(__('Paramètres du thème MOTA', 'MOTA'), __('MOTA', 'MOTA'), 'manage_options', 'MOTA-settings', 'MOTA_theme_settings', 'dashicons-admin-settings', 60);
}

function MOTA_theme_settings() {
echo '<h1>'.get_admin_page_title().'</h1>';


add_action('admin_menu', 'MOTA_add_admin_pages', 10);
do_settings_sections('MOTA_settings_section');
submit_button();

echo '</div>';
echo '</form>';
}

  function MOTA_settings_register() {
register_setting('MOTA_settings_fields', 'MOTA_settings_fields', 'MOTA_settings_fields_validate');
add_settings_section('MOTA_settings_section', __('Paramètres', 'MOTA'), 'MOTA_settings_section_introduction', 'MOTA_settings_section');
add_settings_field('MOTA_settings_field_introduction', __('Introduction', 'MOTA'), 'MOTA_settings_field_introduction_output', 'MOTA_settings_section', 'MOTA_settings_section');
}

function MOTA_settings_section_introduction() {
echo __('Paramètrez les différentes options de votre thème MOTA.', 'MOTA');
}


function MOTA_settings_field_introduction_output() {
    $value = get_option('MOTA_settings_field_introduction');
                
    echo '<input name="MOTA_settings_field_introduction" type="text" value="'.$value.'" />';
        }

function MOTA_settings_fields_validate($inputs) { 
      if(!empty($_POST)) {   
        if(!empty($_POST['MOTA_settings_field_introduction'])) {   
    update_option( 'MOTA_settings_field_introduction', $_POST['MOTA_settings_field_introduction'] ); 
  }
}

return $inputs;
}



add_action('admin_menu', 'MOTA_add_admin_pages', 10);
add_action('admin_init', 'MOTA_settings_register');