<div class="footerContainer">
    <div class="footerNavigationContainer">
        <div class="navMenusContainer">
            <!-- Explore navigation -->
            <div>
                <h3 class="footerNavigationHeading">Explore</h3>
                <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'Footer Navigation One',
                            'menu_class'=>'cohabitFooterNavContainer',
                            'menu_id'=>'cohabitFooterNavContainer',
                        )
                    )
                ?>
            </div>
            <!-- Support Navigation -->
            <div>
                <h3 class="footerNavigationHeading">Support</h3>
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
                <a href="https://www.facebook.com/cohabit.se"><i class="fa-brands fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/cohabit.se/"><i class="fa-brands fa-instagram fa-2x"></i></a>
                <a href="https://www.linkedin.com/company/cohabit-se/"><i class="fa-brands fa-linkedin fa-2x"></i></a>
            </div>
        </div>
    </div>
    <hr class="footerDivider">
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

    <div class="footerInfoContainer">
        <div>
            <p>© 2024 Cohabit. All Rights Reserved</p>
        </div>
        <div>
            <a href=""><p>Terms & conditions</p></a>
        </div>
    </div>
</div>