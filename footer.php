<?php
/**
 * The template for displaying the footer Lumo
 */
?>

	<footer id="colophon" class="footer">
        <div class="container">
            <div class="footer__info">
                <div class="site-branding--footer">
                    <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                    ?>
                </div><!-- .site-branding -->
                <nav id="footer-navigation" class="footer__navigation">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer_menu',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                    ?>
                </nav><!-- #footer-navigation -->

                <div class="footer__social">
                    <ul class="footer__social-list">
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt="Facebook">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg" alt="YouTube">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Instagram">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="#" class="footer__social-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pinterest.svg" alt="Pinterest">
                            </a>
                        </li>
                    </ul>
                </div><!-- .site-footer__social -->

                <div class="footer__bottom">
                    <p class="footer__copyright">LUMO OFFICIAL © BY ZINE. E. FALOUTI ALL RIGHTS RESERVED 2025</p>
                </div><!-- .site-footer__bottom -->
            </div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
