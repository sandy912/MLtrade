<?php
$signedin = $this->session->userdata('user_email');
if(!$signedin){
  redirect('user/login');
}
 ?>
<?php $this->load->view('header'); ?>

<header class="masthead mobile-panel">
  <div class="container text-center">
      <img alt="brand" src="<?php echo base_url(); ?>/img/mltrade-logo.png" style="width:90px;"/>
  </div>
  <div class="container">
    <div class="row">
      <div class="register-panel" style="max-width: 550px;">
        <h4 class="text-center"><b>Thank you for showing your interest on ML Trade!</b></h4>
        <center>
          <h5><b>Now refer your friends to get 100$ on every sucessfull refferal.</b></h5>
          There is no cap on amount of people you can refer but the early bird offer is only for first 5000 registrations
        </center>
        <br>
        <div style="position:relative;">
        <p id="reflink"><?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?></p><button class="copy-btn" onclick="copyToClipboard('#reflink')">Copy</button>
        </div>
          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <span>Share on social media:</span>
            <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a>-->
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_telegram"></a>
          </div>
          <script>
          var a2a_config = a2a_config || {};
          a2a_config.linkname = "ML Trade ♦ GET $100 for registering!! ♦ World's First Margin-Less Crypto trading Platform";
          a2a_config.linkurl = "<?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?>";
          </script>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->

          <div class="outer-box">
                <div class="box">
                  <p>Invited</p>
                  <span><?php echo $this->session->userdata('myrefferals'); ?></span>
                  <span>Users</span>
                </div>
                <div class="box">
                  <p>Balance</p>
                  <span><?php
                  $amount = (($this->session->userdata('myrefferals')*100)+100);
                      echo $amount;
                    ?>$</span>
                  <span>USD</span>
                </div>
          </div>

          <br>
          <p>In case if you missed to follow ML Trade on <a href="https://twitter.com/MLTRADE1" target="_blank">Twitter</a>, and <a href="https://medium.com/@mltradenews" target="_blank">Medium</a> during registration. Here are the links to do it now. Only those who follow our social media channels will get their balance reflected in our trading platform. Every registrations will be checked manually before processing</p>
        </div>
      </div>
    </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>
<!--<a href="?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>-->
