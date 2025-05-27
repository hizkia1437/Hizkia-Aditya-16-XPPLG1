<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require_once "db_connect.php";

$username = $email = $password = "";
$username_err = $email_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        if ($stmt = $mysqli->prepare($sql)) {
            $param_username = trim($_POST["username"]);
            $stmt->bind_param("s", $param_username);
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $username_err = "Username already taken.";
                } else {
                    $username = $param_username;
                }
            } else {
                echo "Oops! Something went wrong checking username.";
            }
            $stmt->close();
        }
    }

    // Validasi email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format.";
    } else {
        $sql = "SELECT id FROM users WHERE email = ?";
        if ($stmt = $mysqli->prepare($sql)) {
            $param_email = trim($_POST["email"]);
            $stmt->bind_param("s", $param_email);
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $email_err = "Email already registered.";
                } else {
                    $email = $param_email;
                }
            } else {
                echo "Oops! Something went wrong checking email.";
            }
            $stmt->close();
        }
    }

    // Validasi password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must be at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Kalau gak ada error, insert data ke db dan auto login
    if (empty($username_err) && empty($email_err) && empty($password_err)) {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        if ($stmt = $mysqli->prepare($sql)) {
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt->bind_param("sss", $param_username, $param_email, $param_password);

            if ($stmt->execute()) {
                // Auto login setelah berhasil daftar
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $mysqli->insert_id;

                header("Location: homepage.php");
                exit();
            } else {
                echo "Something went wrong. Please try again.";
            }
            $stmt->close();
        }
    }
    $mysqli->close();
}
?>
