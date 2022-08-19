<div class="footerMenu">
    <div class="Brand">
        <div class="logo">
            <?php   
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                
                if ( has_custom_logo() ) {
                    echo '<a class="homeLogo" href="/"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
        </div>
        <p class="blogDescription"><?php bloginfo('description'); ?> </p>
    </div>
    <div class="footerMenuContainer">
        <div class="aboutMenu">
            <h2>About</h2>
            <nav class="aboutNav">
                <ul>
                    <li>
                        <a href="/#">How it works</a>
                    </li>
                    <li>
                        <a href="/#">Featured</a>
                    </li>
                    <li>
                        <a href="/#">Partnership</a>
                    </li>
                    <li>
                        <a href="/#">Bussiness Relation</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="ComunityMenu">
            <h2>Community</h2>
            <nav class="aboutNav">
                <ul>
                    <li>
                        <a href="/#">Events</a>
                    </li>
                    <li>
                        <a href="/#">Blog</a>
                    </li>
                    <li>
                        <a href="/#">Podcast</a>
                    </li>
                    <li>
                        <a href="/#">Invite a friend</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="SocialsMenu">
            <h2>Socials</h2>
            <nav class="aboutNav">
                <ul>
                    <li>
                        <a href="/#">Discord</a>
                    </li>
                    <li>
                        <a href="/#">Instagram</a>
                    </li>
                    <li>
                        <a href="/#">Twitter</a>
                    </li>
                    <li>
                        <a href="/#">Facebook</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>