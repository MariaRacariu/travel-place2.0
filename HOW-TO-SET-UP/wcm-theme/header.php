<?php wp_head(); ?>
<nav class="navbar navbar-expand-lg navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand wcm-nav-brand" href="/travel-place2.0">Travel Place</a>
<?php 

wp_nav_menu( array( 
    'theme_location'    => 'main-menu',
    'menu_class'        => 'navbar-nav',
    'container_class'   => 'wcm-nav',
    )); 
?>
        <button class="btn btn-primary wcm-navbar-button" type="button">Contact</button>
    </div>
</nav>