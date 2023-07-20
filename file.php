<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div class="col-right">
          <div class="contact-form">
            <h3>Get In Touch</h3>
        <div class="account-page">
      <div class="col-2">
        <div class="form-container">
          <div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Register</span>
           
          </div>
          <form id="LoginForm" action="fetch2.php" method="post">
            <input type="text" placeholder="UserName"name="username" required="required">
            <input type="Password"placeholder="Password"name="password" required="required">
            <br><br>
            <button type="submit" class="btn" name="submit">Login</button>
            <br>

          </form>

          <form id="RegForm" action="fetch.php" method="post">
            
            <input type="text" placeholder="UserName" name="user"required="required">
            <input type="email"placeholder="Email" name="email"required="required">
          <input type="Password"placeholder="Password" name="pwd"required="required">
          <br><br>

            <button type="submit" class="btn">Register</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>