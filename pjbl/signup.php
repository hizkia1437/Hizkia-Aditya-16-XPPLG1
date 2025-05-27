<?php
if (session_status() == PHP_SESSION_NONE) session_start();
require_once 'db_connect.php';

$username = $email = $password = "";
$username_err = $email_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $param_username);
        $param_username = trim($_POST["username"]);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $username_err = "This username is already taken.";
        } else {
            $username = trim($_POST["username"]);
        }
        $stmt->close();
    }

    // Validasi email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format.";
    } else {
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $param_email);
        $param_email = trim($_POST["email"]);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $email_err = "This email is already registered.";
        } else {
            $email = trim($_POST["email"]);
        }
        $stmt->close();
    }

    // Validasi password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must be at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Simpan ke DB jika semua valid
    if (empty($username_err) && empty($email_err) && empty($password_err)) {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sss", $param_username, $param_email, $param_password);
        $param_username = $username;
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        if ($stmt->execute()) {
            header("location: login.php");
            exit();
        } else {
            echo "Something went wrong. Please try again.";
        }
        $stmt->close();
    }

    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header -->
<header class="header">
  <div class="container">
    <div class="logo-nav">
      <div class="logo-circle">
        <img src="images/logo.png" alt="Logo" height="45px" width="45px"/>
      </div>
      <nav class="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- User icon SVG -->
    <div class="user-icon">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716
                   C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214
                   5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3
                   12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                   stroke="black" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round"/>
        </svg>
    </div>
  </div>
</header>

<!-- Banner -->
<div class="banner"></div>


<!-- Main Content -->
<main class="main">
  <div class="login-container">
    <!-- Logo Section -->
    <div class="left-box">
      <img src="images/logo.png" alt="Logo" class="logo-img" />
    </div>

    <!-- Signup Form -->
    <div class="right-box">
      <h2>Sign Up</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" required />
        <span class="error-message"><?php echo $username_err; ?></span>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required />
        <span class="error-message"><?php echo $email_err; ?></span>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
        <span class="error-message"><?php echo $password_err; ?></span>

        <button type="submit">Sign Up</button>
      </form>

      <div class="register-link">
        <a href="login.php">Already have an account? Sign In</a>
      </div>
    </div>
  </div>
</main>


</body>
</html>
