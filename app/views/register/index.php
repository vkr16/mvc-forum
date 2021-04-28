<div class="container mt-4">
  <div class="row">
    <div class="col-md-4 mt-4">
    <h2>Silahkan Daftar!</h2>
      <form class="mt-4" action="<?=ROOTURL?>/register/userRegister" method="POST">
        <div class="form-group">
          <label for="InputName">Full Name</label>
          <input required autocomplete="off" type="text" class="form-control" id="InputName" name="fullname">
        </div>
        <div class="form-group">
          <label for="InputUsername">Username</label>
          <input required autocomplete="off" type="text" class="form-control" onkeyup="disabler()" id="InputUsername" name="username" >
          <small id="usernameFeedback" class="form-text text-danger"></small>
        </div>
        <div class="form-group">
          <label for="InputEmail">Email address</label>
          <input required autocomplete="off" type="email" class="form-control" onkeyup="disabler()" id="InputEmail" name="email">
          <small id="emailFeedback" class="form-text text-danger"></small>
        </div>
        <div class="form-group">
          <label for="InputPassword">Password</label>
          <input required type="password" class="form-control" id="InputPassword" name="password">
        </div>
        <button type="submit" id="registerButton" disabled class="btn btn-primary">Sign up</button >
      </form>
    </div>
  </div>
</div>


<script type = "text/javascript" >
function disabler(){
  var x = document.getElementById('usernameFeedback').innerHTML;
  var y = document.getElementById('emailFeedback').innerHTML;
  var a = document.getElementById('InputUsername').value;
  var b = document.getElementById('InputEmail').value;

  if (x == '<i></i>' && y == '<i></i>') {
    document.getElementById('registerButton').disabled = false;
  }else{
    document.getElementById('registerButton').disabled = true;
  } 
}
   
$(document).ready(
    function() {

        $("#InputUsername").on('keyup', function() {
              $.post("http://localhost/mvc-forum/register/checkUsername", {
                      username: $("#InputUsername").val()
                  },
                  function(data) {
                      $("#usernameFeedback").html(data);
                      disabler();
                  }
              );
        });

        $("#InputEmail").on('keyup', function() {
              $.post("http://localhost/mvc-forum/register/checkEmail", {
                      email: $("#InputEmail").val()
                  },
                  function(data) {
                      $("#emailFeedback").html(data);
                      disabler();
                  }
              );
        });

    }
);


</script>


