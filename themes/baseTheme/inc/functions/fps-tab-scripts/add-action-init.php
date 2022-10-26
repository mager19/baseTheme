<?php 

add_action('init', 'hook_fps_scripts');
function hook_fps_scripts() {

	if ( have_rows('fps_scripts_repeater','options') ) : 

		while( have_rows('fps_scripts_repeater','options') ) : the_row(); 
			// Get Code
			$fps_script_code = get_sub_field('fps_script_code'); 
			// Get Position of code
			$fps_script_position = get_sub_field('fps_script_position'); 
			// show or not
			$fps_script_enabled = get_sub_field('fps_script_enabled'); 

			// in case be selected high_head or before_head
			if(($fps_script_position === 'high_head')){
				// priority at top </head>
				$fps_priority = 0;
			}elseif($fps_script_position === 'before_head'){
				// priority before </head>
				$fps_priority = 100;
			}

			// <head> position and print script
			if($fps_script_enabled && $fps_script_code && ($fps_script_position === 'high_head' || $fps_script_position === 'before_head')){
				add_action('wp_head',  
				function() use ( $fps_script_code ) { 
					echo $fps_script_code; } , $fps_priority );
			}

			// <body> print
			if($fps_script_enabled && $fps_script_code && $fps_script_position === 'open_body'){
				add_action('wp_body_open',  
				function() use ( $fps_script_code ) { 
					echo $fps_script_code; }, 0 );
			}
			
			// </body> print
			if($fps_script_enabled && $fps_script_code && $fps_script_position === 'before_body'){
				add_action('wp_footer',  
				function() use ( $fps_script_code ) { 
					echo $fps_script_code; } , 100);
			}

		endwhile; 

	endif; 
	
}


function fps_scripts_style() {  ?>
    <style type="text/css">
		#acf-group_62509ddb6cb5b .fps-script-comments .acf-input textarea{
			background-color: #f0f0f1;
			border: none;
		}
    </style>
<?php }
add_action('acf/input/admin_head', 'fps_scripts_style');