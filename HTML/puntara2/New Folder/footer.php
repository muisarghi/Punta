    <div id="footer">
        <div id="footer-box">
            <div id="footer-widget-container">
                <?php // insert dynamic sidebar name or id instead of $index (default = 1)
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget') ) : ?>
						<!-- place your content for the case the dynamic sidebar was not found -->
					 <?php endif; ?>
                <div class="clear"></div>
            </div>
            <ul id="findUs">
                <li>Find Us :</li>
                <li><a href="http://www.facebook.com/goodboyjimmy" target="_blank"><img alt="Facebook" src="<?php bloginfo('template_directory')?>/images/icon2-fb.png" /></a></li>
                <li><a href="http://www.twitter.com/goodboyjimmy" target="_blank"><img alt="Twitter" src="<?php bloginfo('template_directory')?>/images/icon2-tw.png" /></a></li>
                <li><a href="http://www.myspace.com/goodboyjimmy" target="_blank"><img alt="My Space" src="<?php bloginfo('template_directory')?>/images/icon2-myspace.png" /></a></li>
                <li><a href="http://www.reverbnation.com/goodboyjimmy" target="_blank"><img alt="Reverb Nation" src="<?php bloginfo('template_directory')?>/images/icon2-reverb.jpg" /></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <p><a href="#">Privacy Policy</a> &#124; <a href="#">Term Of Use</a></p>
        <p>Copyright © 2011. Design by <a id="special" href="http://27thisland.com/">27th Island</a></p>
    </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
   
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5195782-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</html>