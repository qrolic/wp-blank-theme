## How to Link css file and js file
    Qrolic theme -> functions.php
    
    link css file 
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css', array(), '20151215');

    link js file
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array(), '20151215', _S_VERSION, true  );
    

## Add menu
  
   Qrolic theme -> functions.php
   
     Add navigation menu
	
        register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'qrolic-theme' ),
		)
	);
 	
     Add multiple menu like this
	
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'qrolic-theme' ),
			'footer' => esc_html__( 'Footer', 'qrolic-theme' ),
		)
	);
	


## Home page 
	```
   	home.php  is homepage template 
	make a template page like this
	/* Template Name: Homepage */