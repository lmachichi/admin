<?php include "head.inc.php" ?>;
  
<main class="form-signin w-100 m-auto">
  <form onsubmit="return login()">
    <img class="mb-4" src="../images/lockIcon.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name = "username" id="username" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 1984–2022</p>
  </form>
</main>




<script src="jquery.min.js"></script>
<script>
     function login() {
        var username = $('#username').val();
        var password = $('#password').val();
        $.post("http://localhost/app/admin/includes/api/user.php", {username:username, password:password},
        function(data){
            if(parseInt(data.flag) ===1){
                alert("Login successfully");
            }else{
                alert("Login Fail");
            }
        }, 'json');

        return false
        } 
</script>
    
  </body> 
</html>

<?php include "footer.inc.php" ?>;