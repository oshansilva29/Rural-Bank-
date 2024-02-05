<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE,edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: auto;
      font-family: 'Poppins', sans-serif;
      background: url('img/login.jpg') no-repeat;
      background-position: center;
      background-size: cover;
      min-height: 90vh;
      width: 100%;
    }
    .container {
      border-radius: 4px;
      padding: 15px;
      backdrop-filter: blur(5px);
      border: 2px solid rgba(255, 255, 255, 0.5);
      background-color: rgba(234, 231, 231, 0.3);
      border-radius: 20px;
      justify-content: center;
      align-items: center;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
      margin: auto;
      margin-top: 10%;
      text-align: center;
      height: 75%;
    }
    label {
      color: #000000;
      font-weight: bold;
      font-size: 1.5rem;
    }
    .input-container {
      border-radius: 8px;
      display: flex;
      align-items: center;
      margin-top: 10px;
      margin-left: 1.5rem;
      margin-right: 1.5rem;
      height: 3rem;
      margin-bottom: 1rem;
      background-color: transparent;
    }
    .login-input-field {
      border: none;
      padding: 8px;
      font-size: 16px;
      outline: none;
      max-height: fit-content;
      background: none;
      border: none;
      font-weight: bold;
      border-bottom: 1px solid rgb(0, 0, 0);
      align-items: center;
    }
    .error-message {
      color: rgb(255, 0, 0);
      margin-top: 10px;
      font-size: 1rem;
      font-weight: bold;
      display: none;
    }
    .success-message {
      display: none;
    }
    .login-button {
      background-color: #810b56;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 20px;
      padding: 15px;
      font-weight: bold;
      font-size: 1rem;
      width: 30%;
      text-align: center;
      align-items: center;
    }
    .show-button{
      background-color: rgba(0, 0, 0, 0);
      border: none;
      font-size: 15px;
      margin-left: 5px;
      cursor: pointer;
    }

    .register-button {
      background-color: gray; 
      color: white;
      border: none;
      text-decoration: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 20px;
      margin-left: 10px;
      padding: 15px;
      font-weight: bold;
      font-size: 1rem;
      width: 30%;
      text-align: center;
      align-items: center;
      display: inline-block;
    }
  </style>
</head>
<body>
  <form action="sinhala/sinhalamainlogin.php" method="post">
    <div class="container">
      <label>පරිශීලකනාමය</label>
      <div class="input-container">
        <input class="login-input-field" type="text" name="username" placeholder="Username" required />
      </div>
      <label>මුරපදය</label>
      <div class="input-container">
        <input class="login-input-field" type="password" name="password" placeholder="Password" id="passwordInput" required />
        <a class="show-button" id="showPasswordButton">පෙන්වන්න</a>
      </div>
      <button class="login-button">ඇතුල්වන්න</button>
      <a class="register-button" href="superadminlogin.php">ලියාපදිංචි</a>
    </div>
  </form>
  <script>
    const passwordInput = document.getElementById('passwordInput');
    const showPasswordButton = document.getElementById('showPasswordButton');

    showPasswordButton.addEventListener('click', () => {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    });
</script>
</body>
</html>
