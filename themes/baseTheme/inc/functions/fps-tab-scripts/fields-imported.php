<?php
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array(
        'key' => 'group_624f4e608ab43',
        'title' => 'FPS Scripts',
        'fields' => array(
            array(
                'key' => 'field_624f650b209f7',
                'label' => 'Scripts List',
                'name' => 'fps_scripts_repeater',
                'type' => 'repeater',
                'instructions' => 'Click on \'Add New Script\' Button and follow the instructions.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add New Script',
                'sub_fields' => array(
                    array(
                        'key' => 'field_624f4e7d24060',
                        'label' => 'Script Label',
                        'name' => 'fps_script_name',
                        'type' => 'text',
                        'instructions' => 'This is a Label to recognize the script functionality.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '70',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_624f4eab24061',
                        'label' => 'Enabled',
                        'name' => 'fps_script_enabled',
                        'type' => 'true_false',
                        'instructions' => 'Enabled or not to make tests.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_625087494306b',
                        'label' => 'Position inside Site',
                        'name' => 'fps_script_position',
                        'type' => 'button_group',
                        'instructions' => 'The place where you want to load this script.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'high_head' => 'As High in the Head',
                            'before_head' => 'Before Closing Head',
                            'open_body' => 'Opening Body',
                            'before_body' => 'Before Closing Body',
                        ),
                        'allow_null' => 0,
                        'default_value' => '',
                        'layout' => 'vertical',
                        'return_format' => 'value',
                    ),
                    array(
                        'key' => 'field_624f4ec524062',
                        'label' => 'Paste Script',
                        'name' => 'fps_script_code',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '70',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-fps-scripts',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_62509ddb6cb5b',
        'title' => 'Script Note Comments',
        'fields' => array(
            array(
                'key' => 'field_62509dea94146',
                'label' => 'Extra Comments:',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'fps-script-comments',
                    'id' => '',
                ),
                'message' => 'Include setTimeout function to delay script for 2 (2000) seconds:
    
    Right after script opening:
    setTimeout(function () {
    
    
    Right before script closing
    },2000);',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-fps-scripts',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    endif;		
?>