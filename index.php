<?php
// Start the session
session_start();

// Regenerate session ID to ensure session security
session_regenerate_id(true);

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

// Check if the user has completed the survey
$email = $_SESSION['email'];
$stmt = $pdo->prepare("SELECT name, survey_completed FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if the user data was fetched successfully
if ($user) {
    $name = $user['name'];
    $surveyCompleted = $user['survey_completed'];
} else {
    // Handle the case where the user is not found
    $name = "User";
    $surveyCompleted = false;
}

if ($user && $user['survey_completed'] === null) {
    // If the survey hasn't been completed, show the popup
    echo '<div id="surveyModal" class="modal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeModal()">&times;</span>
                <h2>Survey Invitation</h2>
                <p>Would you like to go on a survey for a recommendation of products?</p>
                <div class="modal-buttons">
                    <button class="btn-yes" onclick="redirectToSurvey()">Yes</button>
                    <button class="btn-no" onclick="setSurveyNull()">No</button>
                </div>
            </div>
          </div>

          <style>
            /* Basic styling for the modal */
            .modal {
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1000;
            }
            .modal-content {
                position: relative;
                margin: 10% auto;
                width: 400px;
                background-color: #fff;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 20px;
                cursor: pointer;
            }
            .modal-content h2 {
                margin-bottom: 10px;
                color: #333;
            }
            .modal-content p {
                margin-bottom: 20px;
                color: #555;
            }
            .modal-buttons {
                display: flex;
                justify-content: space-around;
            }
            .btn-yes, .btn-no {
                background-color: #28a745;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 8px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s;
            }
            .btn-yes:hover, .btn-no:hover {
                background-color: #218838;
            }
            .btn-no {
                background-color: #dc3545;
            }
            .btn-no:hover {
                background-color: #c82333;
            }
          </style>

          <script>
            function closeModal() {
                document.getElementById("surveyModal").style.display = "none";
            }
            function redirectToSurvey() {
                window.location.href = "surveyy_load.php";
            }
            function setSurveyNull() {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "update_survey_status.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("email=' . $email . '&status=null");
                closeModal();
            }
          </script>';
}
?>

<html>

<head>
    <title>Avid Shop</title>
    <script src="assets/js/script.js" type="text/javascript"></script>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
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
                    <a href="cart.php"><button class="view-more">View More</button></a>
                </div>
            </div>
        </div>

        <div class="account-setting-container">
            <a href=""> <img class="Image10" src="assets/image/account.png" alt="account"></a>
            <a href=""></a>
            <div class="account_name"><?php echo htmlspecialchars($name); ?></div></a>


            <ul class="account-dropdown">
                <li class="setting"><a href="setting.php">My Account</a></li>
                <li class="setting"><a href="cart.php">My Purchase</a></li>
                <li class="setting"><a href="login.php">Logout</a></li>
            </ul>
        </div>

    </div>

    <!-- Category Navigation -->
    <div class="category-container">
        <ul class="category-list">
            <li><a href="submenu/suppliment.html">SUPPLEMENTS</a></li>
            <li><a href="#">VITAMINS</a></li>
            <li><a href="#">FITNESS</a></li>
            <li><a href="#">MENTAL WELLNESS</a></li>
            <li><a href="#">WELLNESS TECH</a></li>
            <li><a href="#">PERSONAL CARE</a></li>
        </ul>
    </div>

    <!------------------ BANNER --------------------->
    <div class="container">
        <div class="page">
            <div class="ads">
                <img src="assets/image/ads/1.jpg" />
                <img src="assets/image/ads/2.jpg" />
                <img src="assets/image/ads/3.jpg" />
                <img src="assets/image/ads/4.jpg" />
                <img src="assets/image/ads/5.jpg" />
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('.ads').bxSlider({
                    auto: true,
                });

            });
        </script>
        <!------------------ BANNER --------------------->

        <!------------------ PRODUCT --------------------->
        <!---- RECOMMEND PRODUCT ---->
        <div class="recommendation-container">
            <div class="recommendation-title">
                <h2>Recommendation</h2>
            </div>
            <hr class="line-separator">

            <div class="product-group">
            <?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

try {
    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Check if user is logged in
    if (!isset($_SESSION['email'])) {
        throw new Exception("User is not logged in.");
    }

    $email = $_SESSION['email'];

    // Retrieve user survey responses
    $stmt = $conn->prepare("SELECT responses FROM survey_responses WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        throw new Exception("No survey responses found.");
    }

    $stmt->bind_result($responses_json);
    $stmt->fetch();
    $stmt->close();

    // Decode the JSON response to an array
    $responses = json_decode($responses_json, true);
    if (!$responses) {
        throw new Exception("Invalid survey responses.");
    }

    // Define a mapping of survey responses to product categories/subcategories
    $category_mapping = [
        'General Wellness' => ['Immunity', 'Nutrition', 'Sleep', 'Energy', 'Stress Relief', 'Joint Health'],
        'Supplements' => ['Organic', 'Vegan', 'Joint Support', 'Heart Health', 'Hormone Balance'],
        'Vitamins' => ['Powder', 'Capsules', 'Gummy'],
        'Fitness' => ['Cardio', 'Weightlifting', 'Yoga'],
        'Mental Wellness' => ['Focus', 'Stress Relief', 'Sleep'],
        'Wellness Tech' => ['Steps', 'Daily'],
        'Personal Care' => ['Dark spots', 'Redness', 'Texture', 'Dry', 'Combination', 'Eczema']
    ];

    // Initialize an array to store recommended products
    $recommended_products = [];

    // Iterate through each response and match with the product categories/subcategories
    foreach ($responses as $question => $answers) {
        if (is_array($answers)) { // Multiple answers for a question
            foreach ($answers as $answer) {
                foreach ($category_mapping as $category => $subcategories) {
                    if (in_array($answer, $subcategories)) {
                        // Fetch products that match the category and subcategory
                        $productStmt = $conn->prepare("SELECT product_id, name, price, image_url, discount, old_price, brand, description FROM products WHERE category = ?");
                        $productStmt->bind_param("s", $category);
                        $productStmt->execute();
                        $productStmt->store_result();

                        if ($productStmt->num_rows > 0) {
                            $productStmt->bind_result($product_id, $name, $price, $image_url, $discount, $old_price, $brand, $description);
                            while ($productStmt->fetch()) {
                                // Add each product to the recommended products array
                                $recommended_products[] = [
                                    'product_id' => $product_id,
                                    'name' => $name,
                                    'price' => $price,
                                    'image_url' => $image_url,
                                    'discount' => $discount,
                                    'old_price' => $old_price,
                                    'brand' => $brand,
                                    'description' => $description
                                ];
                            }
                        }
                        $productStmt->close();
                    }
                }
            }
        } else { // Single answer for a question
            foreach ($category_mapping as $category => $subcategories) {
                if (in_array($answers, $subcategories)) {
                    // Fetch products that match the category and subcategory
                    $productStmt = $conn->prepare("SELECT product_id, name, price, image_url, discount, old_price, brand, description FROM products WHERE category = ?");
                    $productStmt->bind_param("s", $category);
                    $productStmt->execute();
                    $productStmt->store_result();

                    if ($productStmt->num_rows > 0) {
                        $productStmt->bind_result($product_id, $name, $price, $image_url, $discount, $old_price, $brand, $description);
                        while ($productStmt->fetch()) {
                            // Add each product to the recommended products array
                            $recommended_products[] = [
                                'product_id' => $product_id,
                                'name' => $name,
                                'price' => $price,
                                'image_url' => $image_url,
                                'discount' => $discount,
                                'old_price' => $old_price,
                                'brand' => $brand,
                                'description' => $description
                            ];
                        }
                    }
                    $productStmt->close();
                }
            }
        }
    }

    // Display only the first 5 recommended products
    if (!empty($recommended_products)) {
        // Remove duplicate products if any
        $unique_products = array_unique($recommended_products, SORT_REGULAR);

        // Limit to the first 5 products
        $display_products = array_slice($unique_products, 0, 5);

        foreach ($display_products as $product) {
            echo '<div class="product-card">';
            echo '<div class="product-image">';
            // Ensure the image path is correctly prefixed for web access
            echo '<img src="' . htmlspecialchars( $product['image_url']) . '">';
            if ($product['discount']) {
                echo '<div class="discount-badge">' . htmlspecialchars($product['discount']) . '% OFF</div>';
            }
            echo '</div>';
            echo '<div class="product-info">';
            echo '<p class="product-name">' . htmlspecialchars($product['name']) . '</p>';
            echo '<p class="product-description">' . htmlspecialchars($product['description']) . '</p>';
            echo '<hr>';
            echo '<p class="product-price">₱' . number_format($product['price'], 2) . '</p>';
            if ($product['old_price']) {
                echo '<p class="product-old-price">₱' . number_format($product['old_price'], 2) . '</p>';
                echo '<p class="product-save">Save - ₱' . number_format($product['old_price'] - $product['price'], 2) . '</p>';
            }
            echo '</div>';
            echo '</div>';
        }
        
    } else {
        echo "No recommended products found based on your survey responses.";
    }

} catch (Exception $e) {
    // Display error message
    echo "An error occurred: " . $e->getMessage();
} finally {
    // Close the database connection
    $conn->close();
}
?>





            </div>
        </div>

        <!---- END RECOMMEND PRODUCT ---->

        <!---- DEALS PRODUCT ----->

        <div class="product-container">
            <p class="timer">Ending in <span id="time">08 : 31 : 29</span></p>
            <div class="products">
                <div class="product-item">
                    <img src="assets/image/product/products/P Dove/Dove Soap beuty cream bar.png"
                        alt="Dove Soap beuty cream bar">
                    <p class="product-name">Dove Soap beuty cream bar</p>
                    <p class="price">₱200.00</p>
                    <div class="status-deals">SELLING FAST</div>
                </div>
                <div class="product-item">
                    <img src="assets/image/product/products/P Olay/OLAY Face Wash Brighten Anti-Aging Regenerist Moisture Black Spots Vit E B3 2pcs.png"
                        alt="OLAY Face Wash">
                    <p class="product-name">OLAY Face Wash Brighten Anti-Aging Regenerist Moisture Black Spots Vit E B3
                        2pcs</p>
                    <p class="price">₱500.00</p>
                    <div class="status-deals">SELLING FAST</div>
                </div>
                <div class="product-item">
                    <img src="assets/image/product/products/W oura ring/Oura Ring rose gold.png"
                        alt="Oura Ring rose gold">
                    <p class="product-name">Oura Ring rose gold</p>
                    <p class="price">₱2 500.00</p>
                    <div class="status-deals">SELLING FAST</div>
                </div>
                <div class="product-item">
                    <img src="assets/image/product/products/F under armor/Under armor duffel bag.png"
                        alt="Under armor duffel bag">
                    <p class="product-name">Under armor duffel bag</p>
                    <p class="price">₱150.00</p>
                    <div class="status-deals">SELLING FAST</div>
                </div>
                <div class="product-item">
                    <img src="assets/image/product/products/V Vitafusion/Vitafusion Power C Orange Gummies 150-Count Vitamin C Supplement for Adults.png"
                        alt="Vitafusion Power">
                    <p class="product-name">Vitafusion Power C Orange Gummies 150-Count Vitamin C Supplement for Adults
                    </p>
                    <p class="price">₱300.00</p>
                    <div class="status-deals">SELLING FAST</div>
                </div>

            </div>
        </div>
        <!---- END DEALS PRODUCT ----->

        <!---- FOR YOU PRODUCT ----->
        <div class="product-section">
            <div class="section-header">
                <h2>For You</h2>
                <a href="#" class="see-more">See more &gt;&gt;&gt;</a>
            </div>
            <div class="product-grid">
                <!-- Product Item 1st column -->
                <div class="product-item">
                    <img src="assets/image/product/products/W apple/Apple Watch 9 Series GPS Sport Band.png">
                    <p class="product-name">Apple Watch 9 Series GPS Sport Band</p>
                    <p class="price">₱10 000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/W oura ring/Oura Ring Heritage.png">
                    <p class="product-name">Oura Ring Heritage</p>
                    <p class="price">₱5 000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/W withings/selfridge.png">
                    <p class="product-name">Selfridge</p>
                    <p class="price">₱7 000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/V Whole food/Whole Food B Complex.png">
                    <p class="product-name">Whole Food B Complex</p>
                    <p class="price">₱7 000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img
                        src="assets/image/product/products/V Vitafusion/Vitafusion Gorgeous Hair, Skin & Nails Multivitamins, 100 Gummies.png">
                    <p class="product-name">Vitafusion Gorgeous Hair, Skin & Nails Multivitamins, 100 Gummies</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>

                <!-- Product Item 2st column -->
                <div class="product-item">
                    <img src="assets/image/product/products/F Nike/Nike T Shirt.png">
                    <p class="product-name">Nike T Shirt</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img
                        src="assets/image/product/products/S nature made/Nature Made Prenatal Multivitamin + 200 mg DHA Softgels, 110 Count to Support Baby's Development.png">
                    <p class="product-name">Nature Made Prenatal Multivitamin + 200 mg DHA Softgels, 110 Count to
                        Support Baby's Development</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/P Dove/Dove Body Silk Moisturising Cream - 300ml.png">
                    <p class="product-name">Dove Body Silk Moisturising Cream - 300ml</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img
                        src="assets/image/product/products/P Dove/Original Nourished and Smooth Antiperspirant Roll-on.png">
                    <p class="product-name">Original Nourished and Smooth Antiperspirant Roll-on</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/P Dove/Dove Shampoo.png">
                    <p class="product-name">Dove Shampoo</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>

                <!-- Product Item 1st column -->
                <div class="product-item">
                    <img src="assets/image/product/products/F Nike/Nike Training Top Short Sleeve.png">
                    <p class="product-name">Nike Training Top Short Sleeve</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/F under armor/Men's UA Big Logo Fill Short Sleeve.png">
                    <p class="product-name">Men's UA Big Logo Fill Short Sleeve</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/M muse/Muse 2  EEG-Powered Meditation & Sleep Headband.png">
                    <p class="product-name">Muse 2 EEG-Powered Meditation & Sleep Headbandt</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/F under armor/Under Armour Undeniable 5.0 Duffle Xs.png">
                    <p class="product-name">Under Armour Undeniable 5.0 Duffle Xs</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
                <!-- Add other product items here -->
                <div class="product-item">
                    <img src="assets/image/product/products/F Nike/Yoga & Pilates Mats Nike.png">
                    <p class="product-name">Yoga & Pilates Mats Nike</p>
                    <p class="price">₱7000.00</p>
                    <div class="status-for">NEW ARRIVAL</div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!---- END FOR YOU PRODUCT ----->

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