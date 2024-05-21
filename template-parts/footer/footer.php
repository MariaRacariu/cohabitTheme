<div class="footerContainer">
    <div>
        <div class="footerIconsContainer">
            <a href="https://www.facebook.com/cohabit.se"><img src="<?php echo get_theme_file_uri( 'assets/images/Facebook.svg' ); ?>" alt="Icon for Facebook" class="footerIcons"></a>
            <a href="https://www.instagram.com/cohabit.se/"><img src="<?php echo get_theme_file_uri( 'assets/images/Instagram.svg' ); ?>" alt="Icon for Instagram" class="footerIcons"></a>
            <a href="https://www.linkedin.com/company/cohabit-se/"><img src="<?php echo get_theme_file_uri( 'assets/images/Linkedin.svg' ); ?>" alt="Icon for Linkedin" class="footerIcons"></a>
        </div>
        <div>
            <p>© 2024 Cohabit . All Rights Reserved</p>
        </div>
        
    </div>
    <div class="footerNavigationContainer">
        <p class="footerHighlightText">Quick Access:</p>
        <?php
            wp_nav_menu(
                array(
                    'menu'=>'Desktop Footer Menu',
                    'menu_class'=>'cohabitFooterNavContainer',
                    'menu_id'=>'cohabitFooterNavContainer',
                )
            )
        ?>
    </div>
</div>