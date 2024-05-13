<nav>
    <div>
        <div><img src="" alt=""></div>
        <div><img src="" alt=""></div>
        <div>
            <ul>
            <?php
                wp_nav_menu(
                    array(
                        'menu'=>'Desktop Primary Menu',
                        'container'=>'',
                        'theme_location'=> 'style.css',
                        'items_wrap'=>'<li>%3$s</li>',
                    )
                )
            ?>
        </ul>
        </div>
    </div>
</nav>