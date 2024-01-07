<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Login</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="login-container">
      <h2>Login Form</h2>
      <form action="beranda.php">
        <input
          class="login-input"
          type="text"
          placeholder="Username"
          required
        />
        <input
          class="login-input"
          type="password"
          placeholder="Password"
          required
        />
        <input type="submit" class="login-button" value="KIRIM" />
      </form>
      <div class="regiss">
        <div class="regi">Belum punya akun?</div>
        <a href="reg.html">Daftar disini</a>
      </div>
    </div>
  </body>
</html>
