<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div id="footer">
    <div class="logo-wrapper">
    	<a href="#homepage"><img alt="" class="logo-footer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" /></a>
    </div>

    <div class="column social-footer">
      <a class="facebook-btn social-btn" href="https://www.facebook.com/TheOutdoorCinema" target="_blank"></a>
      <a class="twitter-btn social-btn" href="https://twitter.com/outdoorcinemauk" target="_blank"></a>
      <a class="instagram-btn social-btn" href="https://instagram.com/TheOutdoorCinema" target="_blank"></a>
    </div>
    <br /><br /><br />
    <div class="footer-links column">
    	<a href="<?php echo esc_url( get_home_url() ); ?>/privacy-policy" style="margin-right:20px;">Privacy Poilicy</a>
    	<a href="<?php echo esc_url( get_home_url() ); ?>/cookie-policy">Cookie Policy</a>
    </div>
</div>

</body>
</html>
