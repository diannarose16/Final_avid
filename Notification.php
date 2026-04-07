<html>
    <head>
        <title>Avid Shop | My Account</title>
        <script src="assets/js/script.js"  type="text/javascript"></script>
        <link href="assets/css/style.css" type="text/css" rel="stylesheet">
        <link href="assets/css/account.css" type="text/css" rel="stylesheet">
        <script src="assets/js/jquery.bxslider.min.js"  type="text/javascript"></script>
        <link href="assets/css/jquery.bxslider.css" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        <div class="Rectangle7">
            <!-- Logo -->
            <a href="index.html"><img class="MainLogo1" src="assets/image/white background.png" /></a>
        
            

              <!-- Search Bar -->
        <div class="search-bar-container">
            <!-- Input field for search -->
            <input 
                type="text" 
                class="search-input" 
                placeholder="Search..." 
            />
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
                <a href=""></a><div class="account_name">Aaron Paul</div></a>
    

                <ul class="account-dropdown">
                    <li class="acount"><a href="setting.html">My Account</a></li>
                    <li class="acount"><a href="cart.html">My Purchase</a></li>
                    <li class="acount"><a href="login.html">Logout</a></li>
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
            <p class="username">Aaron Paul</p>
            <a href="#" class="edit-profile">Edit Profile</a>
        </div>
        <ul class="menu">
            <li>Account Settings</li>
            <li>Profile</li>
            <li>Payments</li>
            <li>Address</li>
            <li>Notification</li>
            <li>History</li>
            <ul>
                <li>Purchases</li>
            </ul>
            <li>Voucher</li>
        </ul>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <h1>Notification</h1>
        <p>Personalize your notifications as per your preferences</p>

        <!-- Email Notification Section -->
        <section>
            <h2>Email Notification</h2>
            <label>
                <input type="checkbox" checked>
                Order Update
            </label>
            <label>
                <input type="checkbox">
                Promotions
            </label>
        </section>

        <!-- AI-Based Smart Notification -->
        <section>
            <h2>AI-Based Smart Notification</h2>
            <label>
                <input type="checkbox">
                Health and Wellness Insights
            </label>
            <label>
                <input type="checkbox">
                Scheduled Quiet Hours
                <input type="time">
            </label>
            <label>
                <input type="checkbox">
                Frequency Control
                <select>
                    <option value="hourly">Hourly</option>
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                </select>
            </label>
            <label>
                <input type="checkbox">
                Customization with Emojis or Icons
                <button>Add</button>
                <button>Edit</button>
                <button>Delete</button>
            </label>
        </section>

        <!-- SMS Notification -->
        <section>
            <h2>SMS Notification</h2>
            <label>
                <input type="checkbox">
                Promotions
            </label>
        </section>
    </main>
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
