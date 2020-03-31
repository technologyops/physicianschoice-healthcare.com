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
        <form class="quform" action="process-file-uploads.php" method="post" enctype="multipart/form-data">
            <div class="quform-wrapper">
                <h1>Quform - <a href="http://codecanyon.net/item/quform-simple-yet-powerful-ajax-contact-form/148273">Ajax Contact Form</a></h1>
                <h2>Quform supports file uploads.  You can also prevent uploads over a certain size
                or uploads with the wrong file extensions and you can have the uploads emailed to you as attachments!</h2>
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
                        <!-- Begin Message element -->
                        <div class="element-wrapper message-element-wrapper quform-cf">
                            <label for="message">Message <span class="red">*</span></label>
                            <div class="input-wrapper message-input-wrapper quform-cf">
                                <textarea class="message-element" id="message" name="message" rows="7" cols="45"></textarea>
                            </div>
                        </div>
                        <!-- End Message element -->
                        <!-- Begin Upload element -->
                        <div class="element-wrapper upload-element-wrapper quform-cf">
                            <label for="upload">File upload <span class="red">*</span></label>
                            <div class="input-wrapper upload-input-wrapper quform-cf">
                                <input type="file" class="upload-element" id="upload" name="upload" />
                            </div>
                            <p class="description">All files allowed.  Maximum size 10MB.</p>
                        </div>
                        <!-- End Upload element -->
                        <!-- Begin Grouped Upload element -->
                        <div class="element-wrapper upload-element-wrapper quform-cf">
                            <label>Grouped file upload <span class="red">*</span></label>
                            <div class="input-wrapper upload-input-wrapper quform-cf">
                                <input type="file" class="upload-element" name="uploads[]" />
                            </div>
                            <div class="input-wrapper upload-input-wrapper quform-cf">
                                <input type="file" class="upload-element" name="uploads[]" />
                            </div>
                            <div class="input-wrapper upload-input-wrapper quform-cf">
                                <input type="file" class="upload-element" name="uploads[]" />
                            </div>
                            <p class="description">Allowed extensions .jpg, .jpeg, .png, .gif. Maximum size 1MB (each). Two uploads required.</p>
                        </div>
                        <!-- End Grouped Upload element -->
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