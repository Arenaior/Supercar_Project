<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      position:absolute;
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background: #292b29ff;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }

    .login-container button:hover {
      background: #2e312eff;
    }

    .login-container p {
      margin-top: 15px;
      font-size: 13px;
      color: #555;
    }

    .login-container a {
      color: #e4e4e4ff;
      text-decoration: none;
    }

    .login-container a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>
  <div class="login-container">
    <h2>Admin Supercar</h2>
            <form action="Admin-TraitementLogin.php" method="post">
        <input type="text" placeholder="Nom" name="Nom" required>
        <input type="password" placeholder="Mot de passe" name="password" required>
        <button type="submit">Se connecter</button>
        </form>


   
  </div>
</body>
</html>
