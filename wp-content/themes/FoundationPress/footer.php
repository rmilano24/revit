<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/pbfa_member_badge.png" alt="">
                </div>
                <div class="cell small-4">
                    <a href="">info@tasterevit.com</a>
                </div>
                <div class="cell small-4">
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="credits">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12">
                    <ul>
                        <li><a href="">copyrights</a></li>
                        <li><a href="">privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>    
</footer> 

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/js/lib/slick.js"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".center").slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
</script>


<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.23.6'><\/script>".replace("HOST", location.hostname));
//]]></script>



</body>
</html>