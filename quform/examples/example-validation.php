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
        <form class="quform" action="process-validation.php" method="post" enctype="multipart/form-data">
            <div class="quform-wrapper">
                <h1>Quform - <a href="http://codecanyon.net/item/quform-simple-yet-powerful-ajax-contact-form/148273">Ajax Contact Form</a></h1>
                <h2>Easy to install into any PHP / HTML web page</h2>
                <div class="quform-inner">
                    <div class="quform-title">Validation examples</div>
                    <div class="quform-elements quform-cf">
                        <p>Fields can have as many validators as you need on them. Empty fields are only validated if they are
                        also required.</p>
                        <!-- Begin Length test element -->
                        <div class="element-wrapper between_three_six-element-wrapper quform-cf">
                            <label for="between_three_six">String length <span class="red">*</span></label>
                            <div class="input-wrapper between_three_six-input-wrapper">
                                <input class="between_three_six-element" id="between_three_six" type="text" name="between_three_six" />
                            </div>
                            <p class="description">Between 3 and 6 characters allowed (customisable)</p>
                        </div>
                        <!-- End Length test element -->
                        <!-- Begin Digits element -->
                        <div class="element-wrapper digits-element-wrapper quform-cf">
                            <label for="digits">Digits</label>
                            <div class="input-wrapper digits-input-wrapper">
                                <input class="digits-element" id="digits" type="text" name="digits" />
                            </div>
                            <p class="description">Only digits allowed</p>
                        </div>
                        <!-- End Digits element -->
                        <!-- Begin Alphanumeric element -->
                        <div class="element-wrapper alphanumeric-element-wrapper quform-cf">
                            <label for="alphanumeric">Alphanumeric <span class="red">*</span></label>
                            <div class="input-wrapper alphanumeric-input-wrapper">
                                <input class="alphanumeric-element" id="alphanumeric" type="text" name="alphanumeric" />
                            </div>
                            <p class="description">Only alphanumeric characters allowed</p>
                        </div>
                        <!-- End Alphanumeric element -->
                        <!-- Begin Alphabet element -->
                        <div class="element-wrapper alphabet-element-wrapper quform-cf">
                            <label for="alphabet">Alphabet</label>
                            <div class="input-wrapper alphabet-input-wrapper">
                                <input class="alphabet-element" id="alphabet" type="text" name="alphabet" />
                            </div>
                            <p class="description">Only alphabet characters allowed</p>
                        </div>
                        <!-- End Alphabet element -->
                        <!-- Begin Less than 3 element -->
                        <div class="element-wrapper less_than_3-element-wrapper quform-cf">
                            <label for="less_than_3">Less than <span class="red">*</span></label>
                            <div class="input-wrapper less_than_3-input-wrapper">
                                <input class="less_than_3-element" id="less_than_3" type="text" name="less_than_3" />
                            </div>
                            <p class="description">Must be less than 3 numerically (customisable)</p>
                        </div>
                        <!-- End Less than 3 element -->
                        <!-- Begin Greater than 3 element -->
                        <div class="element-wrapper greater_than_3-element-wrapper quform-cf">
                            <label for="greater_than_3">Greater than</label>
                            <div class="input-wrapper greater_than_3-input-wrapper">
                                <input class="greater_than_3-element" id="greater_than_3" type="text" name="greater_than_3" />
                            </div>
                            <p class="description">Must be greater than 3 numerically (customisable)</p>
                        </div>
                        <!-- End Greater than 3 element -->
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
</div>
<script type="text/javascript" src="../js/jquery-1.8.1.min.js"></script><!-- If your webpage already has the jQuery library you do not need this -->
<script type="text/javascript" src="../js/plugins.js"></script>
<script type="text/javascript" src="../js/scripts.js"></script>
</body>
</html>