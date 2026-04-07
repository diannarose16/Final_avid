<?php
// Start the session
session_start();

// Destroy the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
// Database connection settings

$host = 'localhost';
$db = 'registration_db';
$user = 'root'; // Replace with your database username
$pass = ''; // Replace with your database password

// Create a new PDO instance for database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Initialize error message
$loginError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize inputs
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validate inputs
    if (empty($email) || empty($password)) {
        $loginError = "Both email and password are required!";
    } else {
        try {
            // Check if the email exists
            $stmt = $pdo->prepare("SELECT password FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user === false) {
                $loginError = "No account found with this email!";
            } elseif (!password_verify($password, $user['password'])) {
                $loginError = "Incorrect password!";
            } else {
                // Successful login
                session_start();
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            }
        } catch (PDOException $e) {
            $loginError = "Error: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Signup</title>
  <style>
    /* General reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f9f9f9;
      overflow: hidden;
      font-family: 'Arial', sans-serif;
    }

    .error-message {
      color: red;
      text-align: center;
      font-size: 16px;
      margin-bottom: 20px;
    
    }
    
    .login-signup {
      width: 1300px;
      min-height: 1200px;
      position: relative;
      background: #f9f9f9;
    }

    .main-logo {
      width: 200px;
      height: 200px;
      position: absolute;
      top: 79px;
      left: 50%;
      transform: translateX(-50%);
      margin-top: 156px;
    }

    .login-container {
      width: 656px;
      height: 526px;
      position: absolute;
      top: 385px;
      left: 50%;
      transform: translateX(-50%);
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 40px;
      box-sizing: border-box;
    }

    label {
      display: block;
      font-size: 16px;
      color: #666;
      margin-bottom: 6px;
      width: 60%;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .username-label {
      top: 430px;
      left: 770px;
    }

    .password-label {
      top: 535px;
      left: 770px;
    }

    .input-field {
      width: 545px;
      height: 50px;
      position: absolute;
      left: 50%;
      background: white;
      border-radius: 40px;
      border: 1px solid #ccc;
      transform: translateX(-50%);
      padding: 0 20px;
      font-size: 18px;
      color: #2c3f2c;
      transition: all 0.5s ease;
      margin-top: 25px;
    }

    .input-field::placeholder {
      color: #04641B;
    }

    .input-field:focus {
      outline: none;
      border-color: #919492;
    }

    .username-field {
      top: 430px;
    }

    .password-field {
      top: 540px;
    }

    button {
      width: 545px;
      height: 48px;
      position: absolute;
      left: 50%;
      background: #6B7C83;
      color: white;
      font-size: 22px;
      border-radius: 10px;
      border: 1px solid black;
      cursor: pointer;
      text-align: center;
      transform: translateX(-50%);
      transition: .3s ease;
    }

    button:hover {
      background-color: #3a583e;
    }

    .login-button {
      top: 650px;
    }

    .create-account-button {
      width: 295px;
      top: 820px;
    }

    .forgot-password {
      position: absolute;
      width: 546px;
      left: 50%;
      top: 725px;
      text-align: center;
      color: #29a350;
      font-size: 18px;
      text-decoration: underline;
      transform: translateX(-50%);
      cursor: pointer;
    }

    .forgot-password:hover {
      color: #1f7c2f;
    }

    .login-design-line {
      position: absolute;
      width: 570px;
      height: 0px;
      left: 50%;
      top: 790px;
      transform: translateX(-50%) rotate(179.92deg);
      border: 2px solid rgba(0, 0, 0, 0.13);
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    button a:hover {
      color: white;
    }

    .forgot-password a:hover {
      color: #1f7c2f;
    }
  </style>
</head>

<body>
  <div class="login-signup">
    <img class="main-logo" src="assets/image/white background.png" />
    <div class="login-container">
      <!-- Error message placeholder -->
      <?php if (!empty($loginError)): ?>
        <div class="error-message"><?php echo htmlspecialchars($loginError); ?></div>
      <?php endif; ?>
    </div>
    <form method="POST" action="">
     
      <label for="email" class="username-label">Email:</label>
      <input type="email" class="input-field username-field" placeholder="Email" id="email" name="email" />

      <label for="password" class="password-label">Password:</label>
      <input type="password" class="input-field password-field" placeholder="password" id="password" name="password" />

      <button type="submit" class="login-button">Log In</button>
    </form>
    <a href="register.php"><button class="create-account-button">Create new account</button></a>
    <div class="forgot-password"><a href="">Forget password?</a></div>
    <div class="login-design-line"></div>
  </div>
</body>

</html>