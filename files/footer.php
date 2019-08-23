    <?php if(basename($_SERVER['PHP_SELF'])!="index.php"){?>
    <?php } ?>
    <footer id="footer">
        <div class="content-container dark">
            <div class="inner-content-container">
                <div class="col-f"></div>
                <div class="col-f"></div>
                <div class="col-f">
                    <h6>About</h6>
                    <p>Alpha 7 Seas is a dedicated fitness and <strong>weight loss gym</strong> centrally located and ready to help you achieve your strength, conditioning, CrossFit and <a href="/personal-training/">personal training</a> goals.</p>
                    <p>Alpha 7 Seas is part of a much larger group of Thailand based fitness facilities known as the <a href="/unit-27-group/">Alpha 7 Seas Group</a>, if you are travelling and want to maintain your training, check out our other fitness facilities in Thailand.</p>
                </div>
                <div class="col-f">
                    <h6>Contact</h6>
                    <p>Address: 73 Bophut Koh Samui
                        <br> Surat Thani 84320
                        <br> Thailand
                        <br>
                        <br> Phone: +66 (0) 54 906 5530
                        <br> Email:
                        <a class="btn-contact email-text" href="ajax/?view=contact"></a>
                        <br> Reviews: <a href="http://www.tripadvisor.in/Attraction_Review-g1389361-d5823176-Reviews-Unit_27-Chalong_Phuket_Town_Phuket.html" class="_blank">Trip Advisor</a>
                        <br> Privacy: <a href="privacy-policy/">Privacy Policy</a>
                        <br> </p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/alpha7seas/" title="Alpha 7 Seas on Instagram" class="social-icon icon-instagram-filled _blank"></a>
                        <a href="https://www.facebook.com/alpha7seas/" title="Alpha 7 Seas on Facebook" class="social-icon icon-facebook _blank"></a>
                        <a href="ajax/?view=contact" title="Email Alpha 7 Seas" class="btn-contact social-icon icon-mail-1"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright 2017 - <?php echo date('Y'); ?> &copy; Alpha 7 Seas&trade;, All Rights Reserved<br><font size="-1" color="#737373">Designed by <a style="color:#737373" href="https://www.orivin.com" target="_blank">Orivin Technologies</a></font></p>
        </div>
    </footer>
    <script type='text/javascript' src='_js/default/plugins.min.js'></script>
    <script type='text/javascript' src='_js/jquery.fancybox.min.js'></script>
    <script type='text/javascript' src='_js/default/scripts.min.js'></script>
    <script type='text/javascript' src='_js/init-wp.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var ratingsL10n = {
            "plugin_url": "https:\/\/kohsamui.unit-27.com\/wp-content\/plugins\/wp-postratings",
            "ajax_url": "https:\/\/kohsamui.unit-27.com\/wp-admin\/admin-ajax.php",
            "text_wait": "Please rate only 1 item at a time.",
            "image": "stars",
            "image_ext": "gif",
            "max": "5",
            "show_loading": "1",
            "show_fading": "1",
            "custom": "0"
        };
        var ratings_mouseover_image = new Image();
        ratings_mouseover_image.src = "<?php echo $mainUrl;?>/wp-content/plugins/wp-postratings/images/stars/rating_over.gif";; /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/wp-postratings/js/postratings-js.js'></script>