<?php $this->load->view('header'); ?>

<header class="masthead mobile-panel">
  <div class="container">
    <div class="row">
      <div class="register-panel register">
        <p class="text-center">Only first 5000 registrations will get 100$ for free on Early Bird Offer.</p>
        <div class="panel-heading">
          <h3 class="panel-title">
            <center>Register Now</center>
          </h3>
        </div>
        <div class="panel-body">

          <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                  <?php
                  }
                   ?>

            <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>" >

              <label class="has-float-label">
                <input id="user_email" name="user_email" type="email" placeholder="email@example.com" required/>
                <span>Email Address</span>
              </label>
              <label class="has-float-label">
                <input id="user_twitter" name="user_twitter" type="text" placeholder="@johndoe" pattern="^[A-Za-z0-9_\.@]{1,25}$" title="Enter twitter username. eg: @xxxxxx" required/>
                <span>Twitter username</span>
              </label>
              <div>
                You must follow <a href="https://twitter.com/MLTRADE1" target="_blank">ML Trade</a> on Twitter and stay until platform launch to receive early  bird offer!<br />
              </div>
            <label class="has-float-label">
              <input id="user_medium" name="user_medium" type="text" placeholder="@johndoe" required/>
              <span>Medium username</span>
            </label>
            <div>
              You must follow <a href="https://medium.com/@mltradenews" target="_blank">ML Trade</a> on Medium and stay until platform launch to receive early bird offer!<br />
            </div>

            <label class="has-float-label">
              <input type="password"  id="user_password" name="user_password" placeholder="••••••••" pattern=".{8,30}" required/>
              <span>Password</span>
            </label>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="capchaenclose">
            <div class="g-recaptcha" data-sitekey="6LfKu1oUAAAAABAXHMF5GKqpmSGe_fxYiH-RuPr7"></div></div><br>
            <input class="btn btn-outline btn-xl text-center" type="submit" value="Register" name="register" />

            </form>
            <center>Already registered?<br><a href="<?php echo base_url('user/login'); ?>">Login here</a></center>
            <style>
            @media (min-width:360px ) {
              .capchaenclose {
                padding-left: 35px;
              }
            }
            </style>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>
