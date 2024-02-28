<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" href="style.css?rand=<?php echo mt_rand(0,99999999) ?>" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<nav class="header">
    <p>WARNING! THIS SECTION OF THIS SITE IS 17+ ONLY!</p>
  <div class="col-xs-8">
    <ul>
      <li><a href="#"><i class="fa fa-2x fa-user-circle-o" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-2x fa-bell" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-2x fa-bars" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</nav>
<div class="google-logo">
  <img src="images/randOOgle.gif" height="105px" width="250px" alt="google-logo" title="google-logo">
</div>
<form action="search.php">
    <input type="submit" value="I'm Feeling Lucky" id="lucky_button">
</form>

</br>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How does this work?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">Close</span>
        </button>
      </div>
      <div class="modal-body">
        When you pressing the "I`m felling lucky" button you are redirected to php script.<br>
        Which generates random nonsense word and searching it up on google!
      </div>
      <div class="modal-footer">
          <p>developed by vkh700. design from bootstrap.</p>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How does this work?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">Close</span>
        </button>
      </div>
      <div class="modal-body">
        Developed by vkh700. design from bootstrap. source avaible on github. the search engine used is google (no api used)
      </div>
      <div class="modal-footer">
          <p></p>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class='container-fluid'>
    <div class='col-md-4'>
      <a data-toggle="modal" data-target="#exampleModal2" class='footer-link move-left'>About</a>
      <a data-toggle="modal" data-target="#exampleModal" class='footer-link move-left'>How does this work?</a>
    </div>
    <div class='col-md-8'>
      <a href="#" class='footer-link move-right'>Download source on Git</a>
    </div>
  </div>

</div>