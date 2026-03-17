<?php 
// Function to customize login page. Replace logo.
    function my_login_logo_one() { 
        echo '<style type="text/css">.login{background-position:center} .login{} body.login div#login h1 a {background-image: url('.get_bloginfo('template_directory').'/images/tether-header-logo-white.svg)!important;  padding-bottom: 0px;background-size:50%;width:100% } body div#login form{box-shadow:none!important} body div#login p#nav, body div#login p#nav a, body div#login p#nav a:hover, body div#login p#nav a:active, body div#login p#nav a:focus{text-shadow:none!important;color:#fff!important;font-size:14px;}.login h1 a{height:40px!important}body{background:#2E2F30!important}.login #nav{padding-left:0px!important;}#backtoblog{padding-left:0px!important;color:#fff!important;}</style>'; 
    } add_action( 'login_enqueue_scripts', 'my_login_logo_one' );
        
    add_filter( 'login_headerurl', 'custom_loginlogo_url' );
    function custom_loginlogo_url($url) {
        return esc_url( home_url( '/' ) );
    }
    
    function my_login_logo_url_title() {
        return get_bloginfo( 'name' );
    }
    add_filter( 'login_headertitle', 'my_login_logo_url_title' );
?>