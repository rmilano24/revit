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
            <div class="grid-x">
                <div class="cell small-12 medium-4 align-middle">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/pbfa_member_badge.png" alt="">
                </div>
                <div class="cell small-12 medium-4 align-middle">
                    <a href="mailto:info@tasterevit.com" class="emailus">info@tasterevit.com</a>
                </div>
                <div class="cell small-12 medium-4 align-middle">
                    <ul>
                        <li><a href="">
                        <svg width="68px" height="62px" viewBox="0 0 68 62" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Final" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Home-Revised-Final" transform="translate(-1108.000000, -4698.000000)">
                                    <g id="Group-38" transform="translate(0.000000, 3071.000000)">
                                        <g id="Group-28" transform="translate(0.000000, 1545.000000)">
                                            <g id="Group-5" transform="translate(1108.000000, 82.000000)">
                                                <ellipse id="Oval-6" fill="#787878" cx="33.7192982" cy="31" rx="33.7192982" ry="31"></ellipse>
                                                <text id="" font-family="FontAwesome" font-size="30" font-weight="normal" line-spacing="23" fill="#222222">
                                                    <tspan x="25" y="44"></tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        </a></li>
                        <li><a href="">                           
                        <svg width="62px" height="62px" viewBox="0 0 62 62" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Final" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Home-Revised-Final" transform="translate(-1196.000000, -4698.000000)">
                                    <g id="Group-38" transform="translate(0.000000, 3071.000000)">
                                        <g id="Group-28" transform="translate(0.000000, 1545.000000)">
                                            <g id="Group-7" transform="translate(1196.000000, 82.000000)">
                                                <circle id="Oval-6-Copy" fill="#787878" cx="31" cy="31" r="31"></circle>
                                                <text id="" font-family="FontAwesome" font-size="30" font-weight="normal" line-spacing="23" fill="#222222">
                                                    <tspan x="18" y="43"></tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg> 
                        </a></li>
                        <li><a href="">
                        <svg width="62px" height="62px" viewBox="0 0 62 62" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Final" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Home-Revised-Final" transform="translate(-1278.000000, -4698.000000)">
                                    <g id="Group-38" transform="translate(0.000000, 3071.000000)">
                                        <g id="Group-28" transform="translate(0.000000, 1545.000000)">
                                            <g id="Group-19" transform="translate(1278.000000, 82.000000)">
                                                <circle id="Oval-6-Copy-2" fill="#787878" cx="31" cy="31" r="31"></circle>
                                                <text id="" font-family="FontAwesome" font-size="30" font-weight="normal" line-spacing="23" fill="#222222">
                                                    <tspan x="17" y="44"></tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="credits">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12">
                    <ul>
                        <li><a href="/copyrights/">copyrights</a></li>
                        <li><a href="/privacy-policy/">privacy policy</a></li>
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
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/js/lib/scrolltoid.js"></script>
<script type="text/javascript">
    $(document).on('ready', function() {  
      $(".center").slick({
        infinite: true,
        centerMode: true,
        arrows: true,
        slidesToShow: 1,
        centerPadding: '280px',
        slidesToScroll: 3,
        responsive: [
        {
            breakpoint: 844,
            settings: {
            centerPadding: '80px'
            }
        },
        {
            breakpoint: 500,
            settings: {
            centerPadding: '20px'
            }
        }
        ]
        
      });
      $(".lazy").slick({
        dots: true,
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>


<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.23.6'><\/script>".replace("HOST", location.hostname));
//]]></script>



</body>
</html>