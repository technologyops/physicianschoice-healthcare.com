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
        <form class="quform" action="process-filtering.php" method="post" enctype="multipart/form-data">
            <div class="quform-wrapper">
                <h1>Quform - <a href="http://codecanyon.net/item/quform-simple-yet-powerful-ajax-contact-form/148273">Ajax Contact Form</a></h1>
                <h2>You will need to purchase the form to see the filtered values in your email inbox :). Fields can
                            have as many filters as you need on them.</h2>
                <div class="quform-inner">
                    <div class="quform-title">Filtering examples</div>
                    <div class="quform-elements quform-cf">
                        <!-- Begin Trim filter element -->
                        <div class="element-wrapper trim_filter-element-wrapper quform-cf">
                            <label for="trim_filter">Trim filter <span class="red">*</span></label>
                            <div class="input-wrapper trim_filter-input-wrapper">
                                <input class="trim_filter-element" id="trim_filter" type="text" name="trim_filter" />
                            </div>
                            <p class="description">White space removed from the start and end</p>
                        </div>
                        <!-- End Trim filter element -->
                        <!-- Begin Strip Tags filter element -->
                        <div class="element-wrapper strip_tags_filter-element-wrapper quform-cf">
                            <label for="strip_tags_filter">Strip tags filter <span class="red">*</span></label>
                            <div class="input-wrapper strip_tags_filter-input-wrapper">
                                <input class="strip_tags_filter-element" id="strip_tags_filter" type="text" name="strip_tags_filter" />
                            </div>
                            <p class="description">Strips all HTML tags excluding any you want to allow</p>
                        </div>
                        <!-- End Strip Tags filter element -->
                        <!-- Begin Digits filter element -->
                        <div class="element-wrapper digits_filter-element-wrapper quform-cf">
                            <label for="digits_filter">Digits filter <span class="red">*</span></label>
                            <div class="input-wrapper digits_filter-input-wrapper">
                                <input class="digits_filter-element" id="digits_filter" type="text" name="digits_filter" />
                            </div>
                            <p class="description">Removes all characters that are not digits</p>
                        </div>
                        <!-- End Digits filter element -->
                        <!-- Begin Alphanumeric filter element -->
                        <div class="element-wrapper alphanumeric_filter-element-wrapper quform-cf">
                            <label for="alphanumeric_filter">Alphanumeric filter <span class="red">*</span></label>
                            <div class="input-wrapper alphanumeric_filter-input-wrapper">
                                <input class="alphanumeric_filter-element" id="alphanumeric_filter" type="text" name="alphanumeric_filter" />
                            </div>
                            <p class="description">Removes all characters that are not alphanumeric</p>
                        </div>
                        <!-- End Alphanumeric filter element -->
                        <!-- Begin Alpha filter element -->
                        <div class="element-wrapper alpha_filter-element-wrapper quform-cf">
                            <label for="alpha_filter">Alphabet filter <span class="red">*</span></label>
                            <div class="input-wrapper alpha_filter-input-wrapper">
                                <input class="alpha_filter-element" id="alpha_filter" type="text" name="alpha_filter" />
                            </div>
                            <p class="description">Removes all characters that are not alphabetic</p>
                        </div>
                        <!-- End Alpha filter element -->
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