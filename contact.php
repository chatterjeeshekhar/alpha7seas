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
    <title>Contact us &middot; Alpha 7 Seas</title>
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
    <div class="splash-wrapper content-container dark "> <img src="/_images/fwdwebchanges/ContactUs.jpg" alt="Alpha 7 Seas" width="1920" height="1080" class="seoimg">
        <div class="splash-content">
            <div class="main-title">
                <h1>Contact us</h1> </div>
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
                    <form class="form-style" onsubmit="return false;" method="post" id="contactform">
                        <input type="text" id="fname" name="First_Name" placeholder="Your first name"><br>
                        <input type="text" id="lname" name="Last_Name" placeholder="Your last name"><br>
                        <input type="email" id="email" name="Email" placeholder="Your email"><br>
                        <input type="tel" maxlength="10" id="phone" name="Phone" placeholder="Your phone"><br>
                        <select id="enqType" name="Enquiry_Type">
                            <option value="">-- Select Purpose --</option>
                            <option value="1">Membership Inquiry</option>
                            <option value="2">Business Inquiry</option>
                            <option value="3">Franchise Inquiry</option>
                        </select><br>
                        <textarea rows="6" id="message" name="Message" placeholder="Enter message" ></textarea>
                        <br>
                        <button class="button-27" style="color: white" onclick="contact()">Submit Form</button>
                    </form>
                    <script type="text/javascript">
                    function contact(){
                        var fname = document.getElementById("fname").value;
                        var lname = document.getElementById("lname").value;
                        var email = document.getElementById('email').value;
                        var phone = document.getElementById("phone").value;
                        var type = document.getElementById("enqType").value;
                        var message = document.getElementById("message").value;
                        //document.getElementById("message").value = url;
                        var m = "";
                        var e = "";
                        if(type==1){
                            m = "Membership inquiry";
                            e = "ask@alpha7seas.com";
                        }
                        if(type==2){
                            m = "Business Inquiry";
                            e = "ashish@alpha7seas.com";
                        }
                        if(type==3){
                            m = "Franchise Inquiry";
                            e = "ashish@alpha7seas.com";
                        }
                        //e = "shekhar@orivin.com";
                        if(fname=="" || lname=="" || email=="" || phone=="" || type=="" || message==""){
                            alert("All fields are mandatory");
                        } else {
                            var url = "https://formspree.io/"+e;
                            document.getElementById("contactform").action = url;
                            document.getElementById("contactform").submit();
                            /*document.getElementById("fname").value = "";
                            document.getElementById("lname").value = "";
                            document.getElementById("email").value = "";
                            document.getElementById("phone").value = "";
                            document.getElementById("message").value = "";
                            document.getElementById("enqType").value = "";*/
                        }
                    }
                    </script>
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
                    <p>Phone: +91.86528.36777 / 90043.06777 (Mon -Sat 10AM to 8PM)
                        <br /> Email: <a class="btn-contact1" href="mailto:ask@alpha7seas.com">ask@alpha7seas.com</a></p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/alpha7seas/" title="Alpha 7 Seas on Instagram" style="background-color:#3b5998"></a>
                        <a href="https://www.facebook.com/alpha7seas/" title="Alpha 7 Seas on Facebook" style="background-color:#c92228"></a>
                        <a href="mailto:ask@alpha7seas.com" title="Email Alpha 7 Seas" class="btn-contact1 social-icon icon-mail-1"></a>
                    </div>
                    
                    <p>Mailing Address: <a rel="nofollow" href="#map">Alpha 7 Seas Gym, Shop No. A1, Platinum Heights, Mhada Layout Lokhandwala, Andheri West, Mumbai 400053</a></p>
                    
                </article>
            </div>
            <aside class="col-right">
                <div class="collapsible-share-widget" data-source="alpha7seas" data-url="http://www.alpha7seas.com/contact.php" data-title="Contact Us" data-img="/_images/default/unit-27.jpg" data-desc="Alpha 7 Seas is a dedicated Fitness, Weight Loss, Strength & Conditioning, CrossFit & Personal training gym. Train with Alpha 7 Seas to discover our dedication to your fitness and weight goals.">
                    <ul class="visible-button-27s">
                        <a class="sharing-item1" style="background-color:#3b5998" title="Open Facebook" href="https://www.facebook.com/alpha7seas/" target="_new"> <span class="share-text">Facebook</span> </a>
                        <a class="sharing-item1" style="background-color:#c92228" title="Open Instagram" href="https://www.instagram.com/alpha7seas/" target="_new" title="Share on your Pinterest"> Instagram </a>
                    </ul>
                </div>
               
                <h2>Location </h2>
                <div class="col-items">
                    <div class="col-res ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.379497051675!2d72.823026814902!3d19.134858587054193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b618f894e7a3%3A0xd8c9125de174e1bb!2sAlpha%207%20Seas%20Gym!5e0!3m2!1sen!2sin!4v1571330071892!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                   
                </div>
                <h2>Gym Timings</h2>
                Mon-Fri 6 AM to 10:30PM<Br>
                        Saturday 7AM to 10PM<br>
                        Sunday 7AM to 2 PM
                
            </aside><br><br><br>
        </div>
        <div class="dark-down-arrow"></div>
    </div>
   
    <?php include 'files/footer.php'; ?>
</body>

</html>