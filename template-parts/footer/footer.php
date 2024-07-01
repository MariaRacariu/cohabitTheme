<div class="footerContainer">
    <div>
        <div class="logosSlider">
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/1.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/2.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/3.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/4.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/5.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/6.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/7.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/8.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/9.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/10.png' ); ?>" alt="">
            </div>
            <div class="logoSlide">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/11.png' ); ?>" alt="">
            </div>
        </div> 
    </div>
    <div class="footerNavigationContainer">
        <div>
            <!-- Support Navigation -->
            <div class="footerNavigationItems">
                <p class="copyrightText">© 2024 Cohabit. All Rights Reserved</p>
                <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'Footer Navigation Two',
                            'menu_class'=>'cohabitFooterNavContainer',
                            'menu_id'=>'cohabitFooterNavContainer',
                        )
                    )
                ?>
            </div>
        </div>
        <div>
            <div class="footerIconsContainer">
                <a href="https://www.facebook.com/cohabit.se"><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href="https://www.instagram.com/cohabit.se/"><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="https://www.linkedin.com/company/cohabit-se/"><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div> 
        </div>
    </div>
</div>