<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

// Database connection settings
$host = 'localhost';
$db = 'registration_db';
$user = 'root'; // Replace with your database username
$pass = ''; // Replace with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Get the logged-in user's data
$email = $_SESSION['email'];
$stmt = $pdo->prepare("SELECT name, email, password, phone, gender, dob FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Check if the 'name' field was changed
        if (isset($_POST['name']) && !$user['name_changed']) {
            $newName = $_POST['name'];

            // Update the name and set the name_changed flag to TRUE
            $updateNameStmt = $pdo->prepare("UPDATE users SET name = ? WHERE email = ?");
            $updateNameStmt->execute([$newName, $email]);
        }

        // Check if password is provided and hash it before storing
        $newPassword = $_POST['password'];
        if (!empty($newPassword)) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        } else {
            // If the password is empty, use the existing hashed password from the database
            $hashedPassword = $user['password']; // Assuming $user['password'] holds the current password hash
        }

        // Update the other fields, including the password
        $updateStmt = $pdo->prepare("UPDATE users SET email = ?, password = ?, phone = ?, gender = ?, dob = ? WHERE email = ?");
        $updateStmt->execute([
            $_POST['email'],
            $hashedPassword,
            $_POST['phone'],
            $_POST['gender'],
            $_POST['dob'],
            $email
        ]);

        echo "Profile updated successfully!";
        // Redirect to the profile page or another appropriate location after updating
        header("Location: setting.php");
        exit();
    } catch (PDOException $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
?>


<html>

<head>
    <title>Avid Shop | My Account</title>
    <script src="assets/js/script.js" type="text/javascript"></script>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/account.css" type="text/css" rel="stylesheet">
    <script src="assets/js/jquery.bxslider.min.js" type="text/javascript"></script>
    <link href="assets/css/jquery.bxslider.css" type="text/css" rel="stylesheet">

</head>

<body>
    <div class="Rectangle7">
        <!-- Logo -->
        <a href="index.php"><img class="MainLogo1" src="assets/image/white background.png" /></a>



        <!-- Search Bar -->
        <div class="search-bar-container">
            <!-- Input field for search -->
            <input type="text" class="search-input" placeholder="Search..." />
            <!-- Search icon -->
            <div class="search-icon">
                <img src="assets/image/search.png" alt="Search">
            </div>
        </div>
        <!-- Cart icon -->
        <div class="cart-container">
            <img class="cart-icon" src="assets/image/add to cart.png" alt="Shopping Cart Icon">
            <!-- Hidden cart item info -->

            <div class="cart-info">

                <!-- Initial design to be basing off -->
                <div class="added-product-signifier">Added product</div>
                <hr>
                <ul class="cart-items">
                    <!-- Placeholder items -->
                    <li class="cart-item">
                        <img src="https://via.placeholder.com/50" alt="Product Image">
                        <div class="item-details">
                            <span class="item-name">Timi Reversible Flip Stuffed Octopus Plushie</span>
                            <span class="item-price">₱48</span>
                        </div>
                    </li>
                    <li class="cart-item">
                        <img src="https://via.placeholder.com/50" alt="Product Image">
                        <div class="item-details">
                            <span class="item-name">MSI MAG B460M MORTAR Motherboard</span>
                            <span class="item-price">₱5,700</span>
                        </div>
                    </li>
                    <li class="cart-item">
                        <img src="https://via.placeholder.com/50" alt="Product Image">
                        <div class="item-details">
                            <span class="item-name">GK# Men Outdoor 6 Pocket Cargo Pants</span>
                            <span class="item-price">₱289</span>
                        </div>
                    </li>
                </ul>
                <!-- View More button with text for extra items -->
                <div class="view-more-container">
                    <span class="extra-items-text">2 more items in the cart</span>
                    <button class="view-more">View More</button>
                </div>
            </div>
        </div>

        <div class="account-setting-container">
            <a href=""> <img class="Image10" src="assets/image/account.png" alt="account"></a>
            <a href=""></a>
            <div class="account_name"><?php echo htmlspecialchars($user['name']); ?></div></a>


            <ul class="account-dropdown">
                <li class="acount"><a href="setting.php">My Account</a></li>
                <li class="acount"><a href="cart.php">My Purchase</a></li>
                <li class="acount"><a href="login.php">Logout</a></li>
            </ul>
        </div>

    </div>

    <!------------------ End HEADER--------------------->

    <!------------------ Setting body--------------------->
    <div class="user-account-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile-info">
                <img src="assets/image/profile-placeholder.png" alt="User Profile">
                <p class="username"><?php echo htmlspecialchars($user['name']); ?></p>
                <a href="#" class="edit-profile">Edit Profile</a>
            </div>
            <ul class="menu">
                <li>Account Settings</li>
                <li>Profile</li>
                <li>Payments</li>
                <li>Address</li>
                <li><a href="Notification.php">Notification</a></li>
                <li>History</li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h2>Profile Account</h2>
            <p class="subheading">Manage and secure your account</p>
            <form class="account-form" method="post" id="profile-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <!-- Set all fields, including 'name', to readonly by default -->
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>"
                        placeholder="NAME" readonly required>
                    <small>Account name can only be changed once</small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"
                        placeholder="@gmail.com" readonly required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="**********" readonly required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" name="gender"
                        value="<?php echo htmlspecialchars($user['gender']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>"
                        readonly>
                </div>

                <!-- Edit button -->
                <button type="button" class="edit-btn" id="edit-btn" onclick="toggleEdit()">Edit</button>
                <!-- Save and Cancel buttons -->
                <button type="button" class="cancel-btn" id="cancel-btn" onclick="revertChanges()"
                    style="display: none;">Cancel</button>
                <button type="submit" class="save-btn" id="save-btn" style="display: none;">Save</button>
            </form>
        </div>

        <!-- JavaScript to toggle edit mode -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // All fields are read-only by default when the page loads
                const formElements = document.querySelectorAll('#profile-form input');
                formElements.forEach(element => {
                    element.readOnly = true;
                });
            });

            function toggleEdit() {
                const formElements = document.querySelectorAll('#profile-form input');
                const editBtn = document.getElementById('edit-btn');
                const saveBtn = document.getElementById('save-btn');
                const cancelBtn = document.getElementById('cancel-btn');

                formElements.forEach((element) => {
                    // Exclude 'gender' and 'dob' fields from being toggled
                    if (element.id !== 'gender' && element.id !== 'dob') {
                        element.readOnly = !element.readOnly;
                    }
                });

                // Show or hide the 'Save' and 'Cancel' buttons
                if (saveBtn.style.display === 'none') {
                    saveBtn.style.display = 'inline-block';
                    cancelBtn.style.display = 'inline-block';
                    editBtn.style.display = 'none';
                } else {
                    saveBtn.style.display = 'none';
                    cancelBtn.style.display = 'none';
                    editBtn.style.display = 'inline-block';
                }
            }

            function revertChanges() {
                // Reload the page to reset form fields to their initial state
                location.reload();
            }
        </script>
    </div>

    <!------------------ End Setting body--------------------->


    <!------------------ FOOTER --------------------->

    <footer class="footer">
        <div class="container">
            <div class="footer-sections">
                <!-- Column 1: About -->
                <div class="footer-column">
                    <h4>About AVID Shop</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trust Center</a></li>
                    </ul>
                </div>

                <!-- Column 2: Support -->
                <div class="footer-column">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Product Support</a></li>
                        <li><a href="#">Report Abuse</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>

                <!-- Column 3: Resources -->
                <div class="footer-column">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Product Catalog</a></li>
                        <li><a href="#">Redeem Code</a></li>
                        <li><a href="#">Business Name Generator</a></li>
                        <li><a href="#">Designers & Developers</a></li>
                    </ul>
                </div>

                <!-- Column 4: Partner Programs -->
                <div class="footer-column">
                    <h4>Partner Programs</h4>
                    <ul>
                        <li><a href="#">Affiliate Program</a></li>
                        <li><a href="#">Reseller Programs</a></li>
                        <li><a href="#">AVID Shop Pro</a></li>
                    </ul>
                </div>

                <!-- Column 5: Shopping -->
                <div class="footer-column">
                    <h4>Shopping</h4>
                    <ul>
                        <li><a href="#">Shop All</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">Sale</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-logo">
                    <img src="assets/image/green background.png" alt="AVID Shop Logo">
                    <p>Philippines - English</p>
                </div>
                <div class="footer-legal">
                    <p>© 2024 AVID Shop. All Rights Reserved.</p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <a href="#"><img src="assets/image/facebook-new.png" alt="Facebook"></a>
                    <a href="#"><img src="assets/image/717404.png" alt="YouTube"></a>
                    <a href="#"><img src="assets/image/x.png" alt="Twitter"></a>
                </div>
            </div>
        </div>
    </footer>
    <!------------------ END FOOTER --------------------->
</body>

</html>