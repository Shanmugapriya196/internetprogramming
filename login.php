<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form action="loginlogic.php" method="post">
      <h2>Restaurant UserLogin</h2>
      <?php
        if (isset($_GET['signup'])) {
          echo '<p class="success">Registration successful! Please log in.</p>';
        } elseif (isset($_GET['error'])) {
          echo '<p class="error">Invalid username or password.</p>';
        }
      ?>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
  </div>
</body>
</html>
