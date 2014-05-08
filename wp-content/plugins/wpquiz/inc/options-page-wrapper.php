
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
              <form name='wpquiz_form' method = 'post' action = ''>
                <table class="form-table">
                  <tr>
                    <td>
                      <label for= 'wpquiz_email'>Email</label>
                    </td>
                    <td>
                      <input name="wpquiz_email" id="wpquiz_email" type="text" value="" class="regular-text" />
                    </td>
                  </tr>
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
