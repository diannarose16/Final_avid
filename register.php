<?php
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']); 
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // Validation checks
    if (empty($email) || empty($name) || empty($password) || empty($dob) || empty($gender)) {
        $error = "All fields are required!";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters long!";
    } else {
        try {
            // Check if the email already exists
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $emailExists = $stmt->fetchColumn();

            if ($emailExists > 0) {
                $error = "Email is already taken. Please choose a different one.";
            } else {
                // Insert user data into the database
                $stmt = $pdo->prepare("INSERT INTO users (email, name, password, dob, gender) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$email, $name, password_hash($password, PASSWORD_DEFAULT), $dob, $gender]);

                // Set success message and redirect
                $success = "Registration successful! You can now log in.";
                header('Location: terms-and-reg.html');
                exit();
            }
        } catch (PDOException $e) {
            $error = "Error: " . $e->getMessage();
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        /* General styling for body */
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        /* Register Container */
        .form-wrapper {
            width: 100%;
            max-width: 780px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            box-sizing: border-box;
            height: 150%;
            max-height: 865px;
        }

        .form-logo {
            display: block;
            margin: 0 auto 20px auto;
            width: 120px;
        }

        .form-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-back-step {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #333;
            font-size: 15px;
        }

        .form-back-step span {
            cursor: pointer;
        }

        .form-register-back {
            margin-right: 24px;
            margin-left: -21px;
            height: 24px;
            width: 0px;
            font-size: 40px;
            color: #717171;
        }

        /* Register Divider Style */
        .divider-reg {
            width: 100%;
            height: 1px;
            background: rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        .form-title {
            font-size: 15px;
            color: #333;
            margin: 0 0 10px 0;
            font-weight: normal;
            margin-bottom: 51px;
            margin-left: 13px;
            font-weight: bold;
        }

        /* Form fields */
        .form-group {
            margin-bottom: 11px;
            display: flex;
            flex-direction: column;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #666;
            margin-bottom: 6px;
            width: 60%;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 14px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 24px;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #6b7c83;
        }

        /* Register Overall placeholder font-color */
        .form-group input::placeholder,
        .form-group select::placeholder {
            color: #04641B;
        }

        /* Register Gender selection */
        .gender-group {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-top: 10px;
        }

        .gender-option {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .gender-option input {
            accent-color: #136d1b;
        }

        .gender-option label {
            font-size: 16px;
            color: #333;
            margin-bottom: -4px;
        }

        /* Register Button container */
        .form-button-container {
            text-align: center;
            margin-top: 30px;
        }

        .form-submit-button {
            background: #6b7c83;
            color: #fff;
            padding: 14px 28px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 80%;
            transition: .3s ease;
        }

        .form-submit-button:hover {
            background: #3a583e;
        }

        /* Instruction text */
        .form-note {
            font-size: 12px;
            color: #999;
            margin-top: 8px;
        }

        .reg-year {
            width: 10px;
        }

        /* Custom styles for the number input (Year) */
        input[type="number"] {
            appearance: textfield;
        }

        /* up and arrow design inside year label (removed) */
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="form-wrapper">
        <!-- Logo -->
        <img src="assets/image/white background.png" alt="Logo" class="form-logo">

        <div class="form-back-step">
            <a href="login.php"><span class="form-register-back">&lt;</span></a>
            <span>Step 1 of 2</span>
        </div>

        <!-- Registration Form -->
        <h1 class="form-title">Finish creating your account</h1>

        <!-- Error or success message -->
        <?php if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
        } ?>
        <?php if (isset($success)) {
            echo "<p style='color: green;'>$success</p>";
        } ?>

        <!-- Registration Form Content -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="@gmail.com" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="NAME" required>
                <p class="form-note">This name will appear on your profile.</p>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <p class="form-note">At least 8 characters</p>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input style="color:green" type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <div class="gender-group">
                    <div class="gender-option">
                        <input type="radio" id="men" name="gender" value="Men" required>
                        <label for="men">Men</label>
                    </div>
                    <div class="gender-option">
                        <input type="radio" id="women" name="gender" value="Women" required>
                        <label for="women">Women</label>
                    </div>
                    <div class="gender-option">
                        <input type="radio" id="prefer-not-to-say" name="gender" value="Prefer not to say" required>
                        <label for="Other">Other</label>
                    </div>
                </div>
            </div>

            <div class="form-button-container">
                <button type="submit" class="form-submit-button">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
