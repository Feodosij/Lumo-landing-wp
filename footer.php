<?php
/**
 * The template for displaying the footer Lumo
 */
?>

	<footer id="colophon" class="footer">
        <div class="container">
            <div class="footer__info">
                <div class="footer__logo">
                    <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <nav class="site-menu">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer_menu',
                                'menu_id'        => 'footer-menu',
                                'container'      => 'false',
                                'menu_class'     => 'site-menu__list',
                            )
                        );
                    ?>
                </nav>

                <div class="footer__social">
                    <ul class="footer__social-list">
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/facebook.svg" alt="Facebook">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/youtube.svg" alt="YouTube">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/instagram.svg" alt="Instagram">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pinterest.svg" alt="Pinterest">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer__bottom">
                    <p class="footer__copyright">LUMO OFFICIAL © BY ZINE. E. FALOUTI ALL RIGHTS RESERVED 2025</p>
                </div>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
