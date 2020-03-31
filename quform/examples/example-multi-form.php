<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Quform - Ajax Contact Form</title>

<link rel="stylesheet" type="text/css" href="../css/pagestyles.css" /><!-- Page styles -->
<link rel="stylesheet" type="text/css" href="../css/standard.css" /><!-- Standard form layout -->
</head>
<body>
<div class="outside">
    <!-- To copy the form HTML, start here -->
    <div class="quform-outer">
        <form id="quform-1" class="quform" action="process-multi-form1.php" method="post" enctype="multipart/form-data">
            <div class="quform-wrapper">
                <h1>Quform - <a href="http://codecanyon.net/item/quform-simple-yet-powerful-ajax-contact-form/148273">Ajax Contact Form</a></h1>
                <h2>You can have more than one Quform on the same page</h2>
                <div class="quform-inner">
                    <div class="quform-title">Please get in touch</div>
                    <div class="quform-elements quform-cf">
                        <!-- Begin Name element -->
                        <div class="element-wrapper name-element-wrapper quform-cf">
                            <label for="name">Name <span class="red">*</span></label>
                            <div class="input-wrapper name-input-wrapper">
                                <input class="name-element" id="name" type="text" name="name" />
                            </div>
                        </div>
                        <!-- End Name element -->
                        <!-- Begin Email element -->
                        <div class="element-wrapper email-element-wrapper quform-cf">
                            <label for="email">Email <span class="red">*</span></label>
                            <div class="input-wrapper phone-input-wrapper">
                                <input class="email-element quform-tooltip" id="email" type="text" name="email" title="We will never send you spam, we value your privacy as much as our own" />
                            </div>
                        </div>
                        <!-- End Email element -->
                        <!-- Begin Phone element -->
                        <div class="element-wrapper phone-element-wrapper quform-cf">
                            <label for="phone">Phone</label>
                            <div class="input-wrapper phone-input-wrapper">
                                <input class="phone-element quform-tooltip" id="phone" type="text" name="phone" title="We will only use your phone number to contact you regarding your enquiry" />
                            </div>
                        </div>
                        <!-- End Phone element -->
                        <!-- Begin Subject element -->
                        <div class="element-wrapper subject-element-wrapper quform-cf">
                            <label for="subject">Subject</label>
                            <div class="input-wrapper subject-input-wrapper quform-cf">
                                <select id="subject" name="subject">
                                    <option value="General enquiry">General enquiry</option>
                                    <option value="Sales enquiry">Sales enquiry</option>
                                    <option value="Support enquiry">Support enquiry</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Subject element -->
                        <!-- Begin Message element -->
                        <div class="element-wrapper message-element-wrapper quform-cf">
                            <label for="message">Message <span class="red">*</span></label>
                            <div class="input-wrapper message-input-wrapper quform-cf">
                                <textarea class="message-element" id="message" name="message" rows="7" cols="45"></textarea>
                            </div>
                        </div>
                        <!-- End Message element -->
                        <!-- Begin Captcha element -->
                        <div class="element-wrapper captcha-element-wrapper quform-cf">
                            <label for="type_the_word">Type the word <span class="red">*</span></label>
                            <div class="input-wrapper captcha-input-wrapper quform-cf">
                                <div class="quform-captcha-img"><img src="../images/captcha.png" alt="" /></div>
                                <input id="type_the_word" class="captcha-element" type="text" name="type_the_word" />
                            </div>
                        </div>
                        <!-- End Captcha element -->
                        <!-- Begin Submit button -->
                        <div class="button-wrapper submit-button-wrapper quform-cf">
                            <div class="quform-loading-wrap"><span class="loading">Please wait...</span></div>
                            <div class="button-input-wrapper submit-button-input-wrapper">
                                <input type="submit" class="quform-submit-button" value="Send" />
                            </div>
                        </div>
                        <!-- End Submit button -->
                   </div>
               </div>
           </div>
        </form>
    </div>
    <!-- To copy the form HTML, end here -->
    <!-- To copy the form HTML, start here -->
    <div class="quform-outer">
        <form id="quform-2" class="quform" action="process-multi-form2.php" method="post" enctype="multipart/form-data">
            <div class="quform-wrapper">
            <h1>Quform - <a href="http://codecanyon.net/item/quform-simple-yet-powerful-ajax-contact-form/148273">Ajax Contact Form</a></h1>
            <h2>Easy to install into any PHP / HTML web page</h2>
                <div class="quform-inner">
                    <div class="quform-title">Register for updates</div>
                    <div class="quform-elements quform-cf">
                        <!-- Begin Name element -->
                        <div class="element-wrapper name-element-wrapper quform-cf">
                            <label for="register_name">Name <span class="red">*</span></label>
                            <div class="input-wrapper name-input-wrapper">
                                <input class="name-element" id="register_name" type="text" name="name" />
                            </div>
                        </div>
                        <!-- End Name element -->
                        <!-- Begin Email element -->
                        <div class="element-wrapper email-element-wrapper quform-cf">
                            <label for="register_email">Email <span class="red">*</span></label>
                            <div class="input-wrapper phone-input-wrapper">
                                <input class="email-element quform-tooltip" id="register_email" type="text" name="email" title="We will never send you spam, we value your privacy as much as our own" />
                            </div>
                        </div>
                        <!-- End Email element -->
                        <!-- Begin Captcha element -->
                        <div class="element-wrapper captcha-element-wrapper quform-cf">
                            <label for="register_type_the_word">Type the word <span class="red">*</span></label>
                            <div class="input-wrapper captcha-input-wrapper quform-cf">
                                <div class="quform-captcha-img"><img src="../images/captcha.png" alt="" /></div>
                                <input id="register_type_the_word" class="captcha-element" type="text" name="type_the_word" />
                            </div>
                        </div>
                        <!-- End Captcha element -->
                        <!-- Begin Submit button -->
                        <div class="button-wrapper submit-button-wrapper quform-cf">
                            <div class="quform-loading-wrap"><span class="loading">Please wait...</span></div>
                            <div class="button-input-wrapper submit-button-input-wrapper">
                                <input type="submit" class="quform-submit-button" value="Send" />
                            </div>
                        </div>
                        <!-- End Submit button -->
                   </div>
               </div>
           </div>
        </form>
    </div>
    <!-- To copy the form HTML, end here -->
</div>
<script type="text/javascript" src="../js/jquery-1.8.1.min.js"></script><!-- If your webpage already has the jQuery library you do not need this -->
<script type="text/javascript" src="../js/plugins.js"></script>
<script type="text/javascript" src="../js/scripts.js"></script>
</body>
</html>