<link rel="stylesheet" type="text/css" href="<?= ROOTURL ?>/public/assets/css/login.css">


<div class="container mt-4">
  <div class="col-md-4 mt-4">
  <h2>Ayo Login!</h2>
    <form class="mt-4" action="<?=ROOTURL ?>/login/userLogin" method="POST">
      <div class="form-group">
        <label for="InputUsername">Username</label>
        <input name="username" type="text" class="form-control" id="InputUsername">
        <small id="usernameFeedback" class="text-danger"><i></i></small>
      </div>
      <div class="form-group">
        <label for="InputPassword">Password</label>
        <input name="password" type="password" class="form-control" id="InputPassword">
        <small <?=$data['feedback'] ?> class="text-danger">&nbsp;<i class="fas fa-exclamation-circle fa-fw"></i>&nbsp;Password incorrect</small>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="Check1">
        <label class="form-check-label" for="Check1">Remember me</label>
      </div>
      <button id="signinButton" disabled type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</div>

<script type = "text/javascript" >
function disabler(){
  var x = document.getElementById('usernameFeedback').innerHTML;
  var a = document.getElementById('InputUsername').value;

  if (x == '<i></i>') {
    document.getElementById('signinButton').disabled = false;
  }else{
    document.getElementById('signinButton').disabled = true;
  } 
}
   
$(document).ready(
    function() {

        $("#InputUsername").on('keyup', function() {
              $.post("http://localhost/mvc-forum/login/isUserExist", {
                      username: $("#InputUsername").val()
                  },
                  function(data) {
                      $("#usernameFeedback").html(data);
                      disabler();
                  }
              );
        });


    }
);


</script>