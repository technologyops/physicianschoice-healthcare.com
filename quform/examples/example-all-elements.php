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
        <form class="quform" action="process-all-elements.php" method="post" enctype="multipart/form-data">
            <div class="quform-wrapper">
                <h1>Quform - <a href="http://codecanyon.net/item/quform-simple-yet-powerful-ajax-contact-form/148273">Ajax Contact Form</a></h1>
                <h2>Easy to install into any PHP / HTML web page</h2>
                <div class="quform-inner">
                    <div class="quform-title">All form elements example</div>
                    <div class="quform-elements quform-cf">
                        <!-- Begin Text input element -->
                        <div class="element-wrapper text_input-element-wrapper quform-cf">
                            <label for="text_input">Text input <span class="red">*</span></label>
                            <div class="input-wrapper text_input-input-wrapper">
                                <input class="text_input-element quform-tooltip" id="text_input" type="text" name="text_input" title="Example text input field tooltip" />
                            </div>
                        </div>
                        <!-- End Text input element -->
                        <!-- Begin Single select element -->
                        <div class="element-wrapper single_select-element-wrapper quform-cf">
                            <label for="single_select">Single select <span class="red">*</span></label>
                            <div class="input-wrapper single_select-input-wrapper quform-cf">
                                <select class="quform-tooltip" id="single_select" name="single_select" title="An example tootip on select element">
                                    <option value="">Please select</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Single select element -->
                        <!-- Multi Select element -->
                        <div class="element-wrapper multi_select-element-wrapper quform-cf">
                            <label for="multi_select">Multi select <span class="red">*</span></label>
                            <div class="input-wrapper multi_select-input-wrapper quform-cf">
                                <select id="multi_select" name="multi_select[]" multiple="multiple">
                                    <option value="Multi option 1">Multi option 1</option>
                                    <option value="Multi option 2">Multi option 2</option>
                                    <option value="Multi option 3">Multi option 3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Multi Select element -->
                        <!-- Single Checkbox element -->
                        <div class="element-wrapper single_checkbox-element-wrapper quform-cf">
                            <div class="input-wrapper single_checkbox-input-wrapper quform-cf">
                                <input id="single_checkbox" name="single_checkbox" value="1" type="checkbox" /> <label for="single_checkbox">Single checkbox element <span class="red">*</span></label>
                            </div>
                        </div>
                        <!-- End Single Checkbox element -->
                        <!-- Multi Checkbox element -->
                        <div class="element-wrapper multi_checkbox-element-wrapper quform-cf">
                            <label>Multi checkbox <span class="red">*</span></label>
                            <div class="input-wrapper multi_checkbox-input-wrapper quform-cf">
                                <label><input name="multi_checkbox[]" value="One" type="checkbox" /> One</label><br />
                                <label><input name="multi_checkbox[]" value="Two" type="checkbox" /> Two</label><br />
                                <label><input name="multi_checkbox[]" value="Three" type="checkbox" /> Three</label><br />
                                <label><input name="multi_checkbox[]" value="Four" type="checkbox" /> Four</label><br />
                                <label><input name="multi_checkbox[]" value="Five" type="checkbox" /> Five</label><br />
                            </div>
                        </div>
                        <!-- End Multi Checkbox element -->
                        <!-- Begin Radio element -->
                        <div class="element-wrapper radio_button-element-wrapper quform-cf">
                            <label>Radio button <span class="red">*</span></label>
                            <div class="input-wrapper radio_button-input-wrapper quform-cf">
                                <input id="radio_button-Yes" name="radio_button" value="Yes" type="radio" /> <label for="radio_button-Yes">Yes</label>
                                <input id="radio_button-No" name="radio_button" value="No" type="radio" /> <label for="radio_button-No">No</label>
                            </div>
                        </div>
                        <!-- End Radio element -->
                        <!-- Begin Textarea element -->
                        <div class="element-wrapper textarea_input-element-wrapper quform-cf">
                            <label for="textarea_input">Textarea <span class="red">*</span></label>
                            <div class="input-wrapper textarea_input-input-wrapper quform-cf">
                                <textarea class="textarea_input-element" id="textarea_input" name="textarea_input" rows="7" cols="45"></textarea>
                            </div>
                        </div>
                        <!-- End Textarea element -->
                        <!-- Begin Date element -->
                        <div class="element-wrapper date-element-wrapper quform-cf">
                            <label>Date <span class="red">*</span></label>
                            <div class="input-wrapper date-input-wrapper quform-cf">
                                <select name="date[month]">
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select name="date[day]">
                                    <option value="">Day</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="date[year]">
                                    <option value="">Year</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Date element -->
                        <!-- Begin Time element -->
                        <div class="element-wrapper time-element-wrapper quform-cf">
                            <label>Time <span class="red">*</span></label>
                            <div class="input-wrapper time-input-wrapper quform-cf">
                                <select name="time[hour]">
                                    <option value="">HH</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                                <select name="time[minute]">
                                    <option value="">MM</option>
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Time element -->
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