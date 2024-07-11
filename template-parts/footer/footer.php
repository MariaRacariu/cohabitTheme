<!-- ////////////////////  Footer Section General  //////////////////// -->
<div class="footerContainer">
    <div class="footerNavigationContainer">
        <div>
            <div class="footerNavigationItems">
                <p class="copyrightText">© 2024 Cohabit. All Rights Reserved</p>
                <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'Footer Navigation',
                            'menu_class'=>'cohabitFooterNavContainer',
                            'menu_id'=>'cohabitFooterNavContainer',
                        )
                    )
                ?>
            </div>
        </div>
        <div>
            <div class="footerIconsContainer">
                <a href="<?php echo get_theme_mod('cohabit-social-media-linkOne-text'); ?>"><i class="<?php echo get_theme_mod('cohabit-social-media-iconOne-icon'); ?>"></i></a>
                <a href="<?php echo get_theme_mod('cohabit-social-media-linkTwo-text'); ?>"><i class="<?php echo get_theme_mod('cohabit-social-media-iconTwo-icon'); ?>"></i></a>
                <a href="<?php echo get_theme_mod('cohabit-social-media-linkThree-text'); ?>"><i class="<?php echo get_theme_mod('cohabit-social-media-iconThree-icon'); ?>"></i></a>
            </div> 
        </div>
    </div>
</div>