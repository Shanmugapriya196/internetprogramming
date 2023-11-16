<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form action="signuplogic.php" method="post">
      <h2>Sign Up</h2>
      <?php
        // You can display any messages related to the signup process here
        // For example, success or error messages
        if (isset($_GET['error'])) {
          echo '<p class="error">Error during registration. Please try again.</p>';
        }
      ?>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <!-- Add more fields as needed for your signup form -->

      <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="login.php">Login here</a>.</p>
  </div>
</body>
</html>
