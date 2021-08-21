<?php
function enqueue_styles(){
  $version =wp_get_theme()->get('Version');
  wp_enqueue_style('theme-styles',get_stylesheet_uri());
  $custom_css = theme_customizer_css();
  wp_add_inline_style('theme-styles',$custom_css);
  
  wp_enqueue_style ( 'style', get_template_directory_uri () . '/style.css', array('bootstrap') ,$version, 'all');
  wp_enqueue_style ( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array() ,'1.0.0', 'all');
  wp_enqueue_style ( 'fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array() ,'1.0.0', 'all');
  wp_enqueue_style ( 'font', "https://fonts.googleapis.com", 'all');
  
  wp_enqueue_style ( 'font', "https://fonts.googleapis.com/css2?family=Montserrat&display=swap", 'all');

}
add_action('wp_enqueue_scripts','enqueue_styles');

function add_theme_scripts() {

    // wp_enqueue_style ( 'custom', get_template_directory_uri () . '/assets/css/custom.css', array() ,'1.0.0', 'all');
   
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array (), 1.0, true);
    wp_enqueue_script( 'bootstrap-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js", array ( ), '3.4.1',true);
    wp_enqueue_script( 'bootstrap-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array ( ),'1.16.0',true);
    wp_enqueue_script( 'bootstrap-js',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array ( ),'4.4.1',true);

  }
add_action ( 'wp_enqueue_scripts', 'add_theme_scripts' );


// if ( is_page_template( 'template-part/page_rtl.php' ) ) {
//     include_once 'template-part/page_rtl.php';
// }
function createtheme_theme_support(){
  add_theme_support('title-tag');
  add_theme_support( 'custom-logo');
}
add_action( 'after_setup_theme', 'createtheme_theme_support'); 



  function register_navmenu(){
     $location= array(
        'primary' =>"left Sidebar",
       
        'footer'     => "footer menu items",
     );
      
      register_nav_menus($location );}
  
  add_action( 'init', 'register_navmenu' );


function register(){
  //   add_theme_support( 'custom-logo',array(
  //     'max-height'      => 10,
  //  'width'       => 400,
   
  //  'flex-width'  => true,
  //  'flex-height' => true,
  //     'header-text'          => array( 'site-title', 'site-description' ),
  //     'unlink-homepage-logo' => true, 
  // ));

register_sidebar(array(
  'name' => 'leftside' ,
  'id' => 'left_side',
  'description' => 'Add widget here',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
));



add_theme_support('custom-background');

}


add_action( 'after_setup_theme', 'register'); 


function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
  register_sidebar( array(
      'name' => $name,
      'id' => $id,
      'description' => $description,
      'before_widget' => $beforeWidget,
      'after_widget' => $afterWidget,
      'before_title' => $beforeTitle,
      'after_title' => $afterTitle,
  ));
}

function multiple_widget_init(){
  widget_registration('Footer widget 1', 'footer-sidebar-1', 'test', '', '', '', '');
  widget_registration('Footer widget 2', 'footer-sidebar-2', 'test', '', '', '', '');
  widget_registration('Footer widget 3', 'footer-sidebar-3', 'test', '', '', '', '');
  // ETC...
}

add_action('widgets_init', 'multiple_widget_init');

//colors

function theme_colors($wp_customize){

//1-text color
$wp_customize-> add_setting('text_color',array(
  'default'=>' ',
  'transport' => 'refresh',
));

$wp_customize-> add_control(new  WP_Customize_Color_Control(
  $wp_customize,'text_color',array(
    'section'=>'colors',
    'label' => esc_html('text_color','theme'),
  )
  ));


//2-left-side add setting
  $wp_customize-> add_setting('leftside_color',array(
    'default'=>' ',
    'transport' => 'refresh',
  ));
  
  $wp_customize-> add_control(new  WP_Customize_Color_Control(
    $wp_customize,'leftside_color',array(
      'section'=>'colors',
      'label' => esc_html('leftside_color','theme'),
    )
    ));
//headermenu-side add setting
$wp_customize-> add_setting('headermenu_color',array(
  'default'=>' ',
  'transport' => 'refresh',
));

$wp_customize-> add_control(new  WP_Customize_Color_Control(
  $wp_customize,'headermenu_color',array(
    'section'=>'colors',
    'label' => esc_html('headermenu_color','theme'),
  )
  ));
}
add_action('customize_register', 'theme_colors');


//css function

function theme_customizer_css(){
  ob_start();
  $text_color=get_theme_mod('','');
  if(!empty($text_color)){
    ?>
    *
    { color:<?php echo $text_color;?>;}
    <?php
  }
//logo style
 


  //left-side
  $leftside_color=get_theme_mod('leftside_color','');

  
  if(!empty($leftside_color)){
    ?>
    .left-side
    { background-color:<?php echo $leftside_color;?>;}
    <?php
  }
// header menu
$headermenu_color=get_theme_mod('headermenu_color','');

if(!empty($headermenu_color)){
  ?>
 
     .navigation li.menu-item a {

color:<?php echo $headermenu_color;?>;
text-decoration:none;
}
.navigation	{
display:inline-block;
 padding-top:40px;
	height: 30px; /* set to the height you want your menu to be */
	margin: 0 0 10px; /* just to give some spacing */
}
.navigation ul	{
	margin: 0; padding: 0; /* only needed if you have not done a CSS reset */
}
.navigation li	{
	display: block;
	float: right;
	line-height: 30px; /* this should be the same as your #main-nav height */
	height: 30px; /* this should be the same as your #main-nav height */
	margin: 0; padding: 0; /* only needed if you don't have a reset */
	position: relative; /* this is needed in order to position sub menus */
}
.navigation li a	{
	display: block;
	height: 30px;
	line-height: 30px;
	padding: 0 15px;
}
.navigation .current-menu-item a, #main-nav .current_page_item a, #main-nav a:hover {
	color: #000;
	background: #ccc;
}
.navigation  ul ul { /* this targets all sub menus */
	display: none; /* hide all sub menus from view */
	position: absolute;
	top: 30px; /* this should be the same height as the top level menu -- height + padding + borders */
}
.navigation ul ul li { /* this targets all submenu items */
	float: none; /* overwriting our float up above */
	width: 150px; /* set to the width you want your sub menus to be. This needs to match the value we set below */
}
.navigation ul ul li a { /* target all sub menu item links */
	padding: 5px 10px; /* give our sub menu links a nice button feel */
}
.navigation ul li:hover > ul {
	display: block; /* show sub menus when hovering over a parent */
}


  <?php
  
}
  $css = ob_get_clean();
  return $css;
}


