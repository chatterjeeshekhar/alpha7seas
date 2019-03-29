<?php include 'files/main.php'; include 'files/sendmail.php'; ?>
<?php
$d = $_POST;
if($d['contact']==1){
    $name = $d['name'];
    $type = $d['type'];
    $email = $d['email'];
    $message = $d['message'];
    if(sendSMTP($name, $type, $email, $message)){
        
    }
}

?>
<!DOCTYPE html>
<!--[if IE 7]> <html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]> <html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
    <link rel='dns-prefetch' href='//www.googletagmanager.com'>
    <link rel='preconnect' href='https://www.googletagmanager.com'>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KJVG439');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="/_css/default/style.min.css" />
    <link type="image/png" rel="icon" href="/favicon.png" />
    <!--[if lt IE 9]> <link type="text/css" rel="stylesheet" href="/_css/default/ie.css" /> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script> <![endif]-->
    <title>Contact us &middot; Phuket &middot; Alpha 7 Seas</title>
    <meta name="description" content="Contact Alpha 7 Seas if you have a question about our classes, prices or other facilities." />
    <link rel="canonical" href="<?php echo $mainUrl;?>contact.php" />
    <?php include 'files/top.php'; ?>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <script type='text/javascript' src='/_js/jquery.min.js'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="/xmlrpc.php"> </head>

<body class="page-template-default page page-id-1432 woocommerce-no-js">
    <?php include 'files/header.php'; ?>
    <div class="splash-wrapper content-container dark "> <img src="/_images/newimg/C1.JPG" alt="Contact Us" width="1920" height="1080" class="seoimg">
        <div class="splash-content">
            <div class="main-title">
                <h1>Contact Us</h1> </div>
        </div>
        <div class="light-down-arrow" id="more-info"></div>
    </div>
    <div class="cms content-container">
        <div class="inner-content-container columns">
            <div class="col-left">
                <article>
                    <div class="icc-breadcrumbs">
                        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/"> <span property="itemListElement" typeof="ListItem"><span class="icon-home-1"></span> <a property="item" typeof="WebPage" title="Go to Alpha 7 Seas." href="https://kohsamui.unit-27.com" class="home"><span property="name">Alpha 7 Seas</span></a>
                            <meta property="position" content="1">
                            </span><span class="navxt-seperator">&gt;</span>Contact Us </div>
                    </div>
                    <h2>Reach out to us</h2>
                    <form class="form-style" method="post">
                        <input type="text" name="name" placeholder="Your name"><br>
                        <input type="email" name="email" placeholder="Your email"><br>
                        <select name="type">
                            <option>-- Select Purpose --</option>
                            <option value="1">Membership Inquiry</option>
                            <option value="2">Business Inquiry</option>
                            <option value="2">Franchise Inquiry</option>
                        </select><br>
                        <textarea rows="6" name="message" placeholder="Enter message" ></textarea>
                        <br>
                        <input type="submit" class="button-27" style="color: white" value="Submit Form" name="contact">
                    </form>
                    <style type="text/css">
                        .form-style input, textarea, select {
                                width: 70%;
                                padding: 12px 10px;
                                margin: 8px 0;
                                box-sizing: border-box;
                                color: grey;
                                border-radius:0.1;
                        }
                    </style>
                    <h2>Contact Alpha 7 Seas</h2>
                    <p>If you have questions about our training and fitness classes, facilities, pricing or any other general inquiry, please contact us via the following options so that one of our helpful customer service staff can get back to you and help you pick the training that is right for you.</p>
                    <p>Phone: +91.86528.36777 / 90043.06777
                        <br /> Email: <a class="btn-contact" href="/ajax/?view=contact">info@alpha7seas.com</a>
                        <br /> Reviews: <a href="http://www.tripadvisor.in/Attraction_Review-g1389361-d5823176-Reviews-Unit_27-Chalong_Phuket_Town_Phuket.html" class="_blank">Trip Advisor</a></p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/alpha7seas/" title="Alpha 7 Seas on Instagram" class="social-icon icon-instagram-filled _blank"></a>
                        <a href="https://www.facebook.com/alpha7seas/" title="Alpha 7 Seas on Facebook" class="social-icon icon-facebook _blank"></a>
                        <a href="/ajax/?view=contact" title="Email Alpha 7 Seas" class="btn-contact social-icon icon-mail-1"></a>
                    </div>
                    
                    <p>Mailing Address: <a rel="nofollow" href="#map">Shop No.1, C Wing, Platinum Heights, Mhada Junction, Andheri West, Near Versova Telephone Exchange, Mumbai 400053, India</a></p>
                    <div class="rating-container">
                        <div class="rating-wrapper">
                            <div class="helpful-page">Hi there, was this page helpful?</div>
                            <div id="post-ratings-1432" class="post-ratings" data-nonce="bf705195f6"><img id="rating_1432_1" src="/wp-content/plugins/wp-postratings/images/stars/rating_on.gif" alt="" title="" onmouseover="current_rating(1432, 1, '');" onmouseout="ratings_off(5, 0, 0);" onclick="rate_post();" onkeypress="rate_post();" style="cursor: pointer; border: 0px;" /><img id="rating_1432_2" src="/wp-content/plugins/wp-postratings/images/stars/rating_on.gif" alt="" title="" onmouseover="current_rating(1432, 2, '');" onmouseout="ratings_off(5, 0, 0);" onclick="rate_post();" onkeypress="rate_post();" style="cursor: pointer; border: 0px;" /><img id="rating_1432_3" src="/wp-content/plugins/wp-postratings/images/stars/rating_on.gif" alt="" title="" onmouseover="current_rating(1432, 3, '');" onmouseout="ratings_off(5, 0, 0);" onclick="rate_post();" onkeypress="rate_post();" style="cursor: pointer; border: 0px;" /><img id="rating_1432_4" src="/wp-content/plugins/wp-postratings/images/stars/rating_on.gif" alt="" title="" onmouseover="current_rating(1432, 4, '');" onmouseout="ratings_off(5, 0, 0);" onclick="rate_post();" onkeypress="rate_post();" style="cursor: pointer; border: 0px;" /><img id="rating_1432_5" src="/wp-content/plugins/wp-postratings/images/stars/rating_on.gif" alt="" title="" onmouseover="current_rating(1432, 5, '');" onmouseout="ratings_off(5, 0, 0);" onclick="rate_post();" onkeypress="rate_post();" style="cursor: pointer; border: 0px;" /> (<strong>2</strong> votes, average: <strong>5.00</strong> out of 5)
                                <br /><span class="post-ratings-text" id="ratings_1432_text"></span></div>
                            <div id="post-ratings-1432-loading" class="post-ratings-loading"> <img src="/wp-content/plugins/wp-postratings/images/loading.gif" width="16" height="16" class="post-ratings-image" />Loading...</div>
                        </div>
                    </div>
                </article>
            </div>
            <aside class="col-right">
                <div class="collapsible-share-widget" data-source="alpha7seas" data-url="/contact/" data-title="Contact Us" data-img="/_images/default/unit-27.jpg" data-desc="Alpha 7 Seas is a dedicated Fitness, Weight Loss, Strength & Conditioning, CrossFit & Personal training gym. Train with Alpha 7 Seas to discover our dedication to your fitness and weight goals.">
                    <ul class="visible-button-27s">
                        <li class="sharing-item icon-facebook" data-share-type="facebook" title="Share on Facebook"> <span class="share-text">Share</span> </li>
                        <li class="sharing-item icon-twitter" data-share-type="twitter" title="Tweet this page to your followers"> <span class="share-text">Tweet</span> </li>
                        <li class="sharing-item icon-gplus" data-share-type="googleplus" title="Share on your Google +"> <span class="share-text">Google+</span> </li>
                        <li class="sharing-item icon-stumbleupon" data-share-type="stumbleupon" title="Share on Stumble Upon"> <span class="share-text">Stumble Upon</span> </li>
                        <li class="sharing-item icon-tumblr" data-share-type="tumblr" title="Share on Tumblr"> <span class="share-text">Tumblr</span> </li>
                        <li class="sharing-item icon-pinterest" data-share-type="pinterest" title="Share on your Pinterest"> <span class="share-text">Pinterest</span> </li>
                        <li class="sharing-item icon-reddit" data-share-type="reddit" title="Share on Reddit"> <span class="share-text">Reddit</span> </li>
                    </ul>
                </div>
               
                <h2>Location </h2>
                <div class="col-items">
                    <div class="col-res ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.3849851183663!2d72.82324741442547!3d19.134618155100785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b618f894e7a3%3A0xd8c9125de174e1bb!2sAlpha+7+Seas+Gym!5e0!3m2!1sen!2sin!4v1553860912479!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                   
                </div>
                
            </aside><br><br><br>
        </div>
        <div class="dark-down-arrow"></div>
    </div>
    <section class="membership content-container dark">
        <div class="inner-content-container">
            <h2>Pricing &amp; Packages</h2>
            <p> Good strength and conditioning training shouldn't cost you an arm and a leg. Here at Alpha 7 Seas we want to help make your arms and legs stronger with our dedicated <a href="/weight-loss/" title="Weight Loss Koh Samui">weight loss</a> and advanced <a href="/fitness/" title="Fitness Koh Samui">fitness training</a> sessions. Check out our session packages pricing and pick the one that is right for you when visiting, working, living or holidaying on beautiful Koh Samui, Thailand. </p>
            <p>Alpha 7 Seas session packages do not contain any hidden fee's or charges. You can even sign up before you turn up by accessing our <a href="http://www.unit-27booking.com/" class="_blank">Alpha 7 Seas booking app</a> and securing your spots before the daily classes fill up completely. Advanced bookings are required for all classes as spots are limited for each session.</p> <a href="/pricing/" class="button-27 cta">View pricing</a> </div>
        <div class="light-down-arrow"></div>
    </section>

    <?php include 'files/footer.php'; ?>
</body>

</html>