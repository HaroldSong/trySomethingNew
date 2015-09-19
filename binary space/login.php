<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="LogIn.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

  <body>
    <div id="nav">
        <ul class="pull">
          <li><a href="main.php">Main</a></li>
          <li><a href="#">Search</a></li>
          <li><a href="#">Explore</a></li>
          <li><a href="SignUp.php">Sign Up</a></li>
          <li><a href="Help.php">Help</a></li>
        </ul>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Keep Calm<br/> And <br/>Geek On</h1>
        <p>They said we were crazy. So we made it.</p>
        <a href="#">Learn More</a>
      </div>
      <div id="loginbox" class="loginbox">
        <form>
          <input type="text" class="text" value="Email/Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email/Username';}" >
          <input type="password" class="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
        </form>
        <div class="autologin">  
          <p><input type="checkbox" value="None" name="check"/>Remember Me</p>
        </div>
        <div class="btn"><input type="submit" onclick="myFunction()" value="LOG IN" ></div>
      </div>
    </div>
  </body>
</html>