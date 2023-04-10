<footer class="row justify-content-around pb-5 pt-5 border-top">
    <div class="col-6">
        <div class="w-75">
        <h3>Travel Place</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="row">
                <div class="col">Facebook</div>    
                <div class="col">Twitter</div>    
                <div class="col">Linkedin</div>    
                <div class="col">Youtube</div>    
                <div class="col">Phone</div> 
            </div>
        </div>   
    </div>
    <div class="col-2">
        <h5><u>Main Menu</u></h5>
        <?php wp_nav_menu( array( 
                            'theme_location' => 'main-menu',
                            'container_class'   => 'wcm-nav',
                            'menu_class'        => 'navbar-nav',
                            )); 
        ?>
    </div>
    <div class="col-2">
        <h5><u>Menu</u></h5>
        <?php wp_nav_menu( array( 
                            'theme_location' => 'places-menu',
                            'container_class'   => 'wcm-nav',
                            'menu_class'        => 'navbar-nav',
                            )); 
        ?>
    </div>
</footer>