    <?php if(basename($_SERVER['PHP_SELF'])!="index.php"){?>
    <?php } ?>
    <footer id="footer">
        <div class="content-container dark">
            <div class="inner-content-container">
                <div class="col-d">
                    <h6>Book a trial</h6>
                    <form onsubmit="return false;" class="form-style" id="footerForm">
                        <table width="100%">    
                            <tr>
                                <td><input type="date" id="fDate" required></td>
                                <td><select id="fTime" required><option value="">--Select Time--</option><option value="6am">6am</option><option value="7am">7am</option><option value="8am">8am</option><option value="9am">9am</option><option value="10am">10am</option><option value="10:30am">10:30am</option><option value="11am">11am</option><option value="11:30am">11:30am</option><option value="12pm">12pm</option><option value="12:30pm">12:30pm</option><option value="1pm">1pm</option><option value="1:30pm">1:30pm</option><option value="2pm">2pm</option><option value="2:30pm">2:30pm</option><option value="3pm">3pm</option><option value="3:30pm">3:30pm</option><option value="4pm">4pm</option><option value="5:30pm">5:30pm</option><option value="6:30pm">6:30pm</option><option value="7:30pm">7:30pm</option><option value="8:30pm">8:30pm</option><option value="9:30pm">9:30pm</option></select></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="fName" placeholder="Full Name" required></td>
                                <td><input type="email" id="fEmail" placeholder="Email Address" required></td>
                                
                            </tr>
                            <tr>
                                <td><input type="tel" id="fPhone" placeholder="Phone Number" maxlength="10" required></td>
                                <td><input type="button" onclick="footerForm()" class="button-27" value="Submit"></td>
                            </tr>
                        </table>
                    </form>
                    <script type="text/javascript">
                        function footerForm(){
                            var date = document.getElementById("fDate").value;
                            var time = document.getElementById("fTime").value;
                            var name = document.getElementById("fName").value;
                            var email = document.getElementById("fEmail").value;
                            var phone = document.getElementById("fPhone").value;
                            if((date=="" || time=="" || name=="" || email=="" || phone=="")){
                                alert("All fields are mandatory");
                            } else {
                                var e ="ask@alpha7seas.com";
                                var url = "https://formspree.io/"+e+"?date="+date+"&name="+name+"&time="+time+"&phone="+phone+"&email"+email;
                                document.getElementById("footerForm").action = url;
                                document.getElementById("footerForm").submit();
                                document.getElementById("fDate").value = "";
                                document.getElementById("fTime").value = "";
                                document.getElementById("fName").value = "";
                                document.getElementById("fEmail").value = "";
                                document.getElementById("fPhone").value = "";
                            }
                        }
                    </script>
                </div>
                <div class="col-f">
                    <h6>About</h6>
                    <p>Alpha 7 Seas is a dedicated strength &amp; conditioning gym centrally located and ready to help you achieve your strength, conditioning, cross- functional and personal training goals.</p><p>Our mission is to help you achieve your personal goals, be it on the field, the court, the mountain or just keeping up with your kids and grandkids.</p>
                    </p>
                </div>
                <div class="col-f">
                    <h6>Contact</h6>
                    <p><b>Address:</b> Shop A1
                        <br>Platinum Heights, Mhada Layout
                        <Br>Near Versova Telephone Exchange
                        <br>Andheri West, Mumbai 400053
                        
                        <br> Phone: +91 86528 36777 (Mon -Sat 10AM to 8PM)
                        <br> Email:
                        <a class="btn-contact email-text" href="/contact"></a><br><Br>
                        Mon-Fri 6 AM to 10:30PM<Br>
                        Saturday 7AM to 10PM<br>
                        Sunday 7AM to 2 PM
                        <br> </p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/alpha7seas/" title="Alpha 7 Seas on Instagram" class="social-icon icon-instagram-filled _blank"></a>
                        <a href="https://www.facebook.com/alpha7seas/" title="Alpha 7 Seas on Facebook" class="social-icon icon-facebook _blank"></a>
                        <a href="/contact.php" title="Email Alpha 7 Seas" class="btn-contact1 social-icon icon-mail-1"></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="width:100%;background-color:#000"><a onclick="footerForm()"><img src="_images/sign-me.jpg" width="100%" height="100%"></a></div>
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
        ratings_mouseover_image.src = "/wp-content/plugins/wp-postratings/images/stars/rating_over.gif";; /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/wp-postratings/js/postratings-js.js'></script>