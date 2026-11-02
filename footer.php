<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package online_image_resizer
 */

?>

<footer>
    <div class="container-fluid">
        <div class="row my-footer-container">
            <div class="col-md-3 my-footer">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class' => 'my-footer-ul p-0', // Class for the <ul>
                    'walker' => new My_Footer_Menu_Walker() // Custom walker
                ));
                ?>
            </div>

            <div class="col-md-6 my-footer text-center">
                <div class="row footer-links text-center text-md-start d-flex justify-content-between">
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPG to PNG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPG to JPEG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPG to WEBP</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPG to BMP</a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPEG to PNG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPEG to JPG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPEG to WEBP</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">JPEG to BMP</a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">PNG to JPG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">PNG to JPEG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">PNG to WEBP</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">PNG to BMP</a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">WEBP to JPG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">WEBP to JPEG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">WEBP to PNG</a>
                        <a href="http://onlineimageresizer.net/convert/" class="footer-link d-block">WEBP to BMP</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-footer">
                <div class="cal-social-btns">
                    <a href="#" aria-label="Go to facebook">
                        <span class="box">
                            <span class="face">
                                <i class="fab fa-facebook-f"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#" aria-label="Go to twitter">
                        <span class="box">
                            <span class="face">
                                <i class="fab fa-twitter"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#">
                        <span class="box" aria-label="Go to instagram">
                            <span class="face">
                                <i class="fab fa-instagram"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#" aria-label="Go to youtube">
                        <span class="box">
                            <span class="face">
                                <i class="fab fa-youtube"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- developed by start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 developed-by">
                <small class="text-center">&copy; <?php echo date('Y') ?> - <span style="color: #FFCB4C;">OnlineImageResizer</span> | All rights reserved</small>
            </div>
        </div>
    </div>
    <!-- developed by ends -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>