<!--  add php tags before and after this blurb
//define variables and set to empty
$email = $question1 = $question2 = $question3 = $question4 = $question5 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["email"])){
    $emailErr = "Please Enter an Email Address"
  }
  else{
    $email = $_POST["email"];
  }
  if(empty($_POST["question1"])){
    $question1Err = "*required"
  }
  else{
    $question1 = $_POST["question1"];
  }
  if(empty($_POST["question2"])){
    $question1Err = "*required"
  }
  else{
    $question2 = $_POST["question2"];
  }
  if(empty($_POST["question3"])){
    $question1Err = "*required"
  }
  else{
    $question3 = $_POST["question3"];
  }
  if(empty($_POST["question4"])){
    $question1Err = "*required"
  }
  else{
    $question4 = $_POST["question4"];
  }
  if(empty($_POST["question5"])){
    $question1Err = "*required"
  }
  else{
    $question5 = $_POST["question5"];
  }
}

}
 -->
<style type="text/css">
#wpquiz_form{
  text-align:center;
  margin: 50px auto;
  width: 400px;
}
fieldset{
  border-radius: 3px;
  box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
  padding: 20px 30px;

  box-sizing: border-box;
  width: 80%;
  margin: 0 10%;


}


#wpquiz_form fieldset:not(:first-of-type) {
  display: none;
}
</style>
<div class="wrap">

  <div id="icon-options-general" class="icon32"></div>
  <h2>Name String</h2>

  <div id="poststuff">

    <div id="post-body" class="metabox-holder columns-2">

      <!-- main content -->
      <div id="post-body-content">

        <div class="meta-box-sortables ui-sortable">

          <div class="postbox">

            <h3><span>Welcome to you Quiz!</span></h3>
            <div class="inside">
              <form id ="wpquiz_form" name='wpquiz_form' method = 'post' action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <ul id="progressbar">
                  <li class="active">Account Setup</li>
                  <li>Social Profiles</li>
                  <li>Personal Details</li>
                </ul>
                <!-- <table class="form-table"> -->

                  <fieldset>
                    <ul>
                      <li>
                      <lable for='wpquiz_question1'>Question 1</label>
                    </li>
                    <li>
                      <input name="wpquiz_question1" id='wpquiz_question_1' type='radio' value='a' class='radio-option'/>Option 1
                      <?php if (isset($wpquiz_question1) && $wpquiz_question1 == 'a') echo "checked"?>
                      <br>
                      <input name="wpquiz_question1" id='wpquiz_question_1' type='radio' value='b' class='radio-option'/>Option 2
                      <?php if (isset($wpquiz_question1) && $wpquiz_question1 == 'b') echo "checked"?>
                      <br>
                      <input name="wpquiz_question1" id='wpquiz_question_1' type='radio' value='c' class='radio-option'/>Option 3
                      <?php if (isset($wpquiz_question1) && $wpquiz_question1 == 'c') echo "checked"?>
                      <br>
                      <input type="button" name="next" class="next" value="Next" />
                    </li>
                  </ul>
                  </fieldset>
                  <fieldset>
                  <ul>
                    <li>
                      <lable for='wpquiz_question1'>Question 2</label>
                    </li>
                    <li>
                      <input name="wpquiz_question2" id='wpquiz_question_2' type='radio' value='a' class='radio-option'/>Option 1
                      <?php if (isset($wpquiz_question2) && $wpquiz_question2 == 'a') echo "checked"?>
                      <br>
                      <input name="wpquiz_question2" id='wpquiz_question_2' type='radio' value='b' class='radio-option'/>Option 2
                      <?php if (isset($wpquiz_question2) && $wpquiz_question2 == 'b') echo "checked"?>
                      <br>
                      <input name="wpquiz_question2" id='wpquiz_question_2' type='radio' value='c' class='radio-option'/>Option 3
                      <?php if (isset($wpquiz_question2) && $wpquiz_question2 == 'c') echo "checked"?>
                      <br>
                      <input type="button" name="previous" class="previous" value="Previous" />
                      <input type="button" name="next" class="next" value="Next" />
                    </li>
                  </ul>
                  </fieldset>
                  <fieldset>
                  <ul>
                    <li>
                      <lable for='wpquiz_question1'>Question 3</label>
                    </li>
                    <li>
                      <input name="wpquiz_question3" id='wpquiz_question_3' type='radio' value='a' class='radio-option'/>Option 1
                      <br>
                      <input name="wpquiz_question3" id='wpquiz_question_3' type='radio' value='b' class='radio-option'/>Option 2
                      <br>
                      <input name="wpquiz_question3" id='wpquiz_question_3' type='radio' value='c' class='radio-option'/>Option 3
                      <br>
                      <input type="button" name="previous" class="previous" value="Previous" />
                      <input type="button" name="next" class="next" value="Next" />
                    </li>
                  </ul>
                  </fieldset>
                  <fieldset>
                  <ul>
                    <li>
                      <lable for='wpquiz_question1'>Question 4</label>
                    </li>
                    <li>
                      <input name="wpquiz_question4" id='wpquiz_question_4' type='radio' value='a' class='radio-option'/>Option 1
                      <br>
                      <input name="wpquiz_question4" id='wpquiz_question_4' type='radio' value='b' class='radio-option'/>Option 2
                      <br>
                      <input name="wpquiz_question4" id='wpquiz_question_4' type='radio' value='c' class='radio-option'/>Option 3
                      <br>
                      <input type="button" name="previous" class="previous" value="Previous" />
                      <input type="button" name="next" class="next" value="Next" />
                    </li>
                  </ul>
                  </fieldset>
                  <fieldset>
                  <ul>
                    <li>
                      <lable for='wpquiz_question1'>Question 5</label>
                    </li>
                    <li>
                      <input name="wpquiz_question5" id='wpquiz_question_5' type='radio' value='a' class='radio-option'/>Option 1
                      <br>
                      <input name="wpquiz_question5" id='wpquiz_question_5' type='radio' value='b' class='radio-option'/>Option 2
                      <br>
                      <input name="wpquiz_question5" id='wpquiz_question_5' type='radio' value='c' class='radio-option'/>Option 3
                    </li>
                  </ul>
                   <ul>
                    <li>
                      <label for= 'wpquiz_email'>Email</label>
                    </li>
                    <li>
                      <input name="wpquiz_email" id="wpquiz_email" type="text" value="<?php echo htmlspecialchars($email);?>" class="regular-text" />
                      <span class="error"><?php echo $emailErr?></span>
                      <br>
                      <input type="button" name="previous" class="previous" value="Previous" />
                    </li>
                  </ul>
                  </fieldset>
                </table>
                <p>
                  <input class="button-primary" type="submit" name="wpquiz_email_submit" value="Find Results" />
                </p>
              </form>
            </div> <!-- .inside -->

          <div class="postbox">

            <h3><span>Welcome to you Quiz!</span></h3>
            <div class="inside">
              <div class ='previous results'>
                <p>Below are 20 more recent results</p>
                  <div class= 'wpquiz'>
                    <p>Emily</p>
                    <img class ="wpquiz-pic" width='120px' src="<?php echo $plugin_url . '/images/facebook.png'; ?>">
                  </div>
              </div>
            </div> <!-- .inside -->
          </div> <!-- .postbox -->

        </div> <!-- .meta-box-sortables .ui-sortable -->

      </div> <!-- post-body-content -->

      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">

        <div class="meta-box-sortables">

          <div class="postbox">


              <h3><span>Mike the Frog's Profile</span></h3>
                <div class="inside">

                  <p><img width="100%" class="wptreehouse-gravatar" src="<?php echo $plugin_url . '/images/facebook.png'; ?>" alt="Mike the Frog Gravatar"></p>

                  <ul class="wptreehouse-badges-and-points">

                      <li>Badges: <strong>200</strong></li>
                      <li>Points: <strong>10000</strong></li>
                  </ul>

                </div> <!-- .inside -->

          </div> <!-- .postbox -->

        </div> <!-- .meta-box-sortables -->

      </div> <!-- #postbox-container-1 .postbox-container -->

    </div> <!-- #post-body .metabox-holder .columns-2 -->

    <br class="clear">
  </div> <!-- #poststuff -->

</div> <!-- .wrap -->

<script>
  $("#submit-form-button").attr("disabled", "disabled")

  $emailField = $("#wpquiz_email");
  $emailField.on("keyup", function() {
    checkValidEmail($emailField.val());
  });

  checkValidEmail = function(email) {
    if(email.match(/\w+@+\w+\.+\w+/i)) {
      $("#submit-form-button").removeAttr("disabled");
    }
    else {
      $("#submit-form-button").attr("disabled", "disabled");
    }
  }
</script>
