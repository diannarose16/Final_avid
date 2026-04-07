<html>
    <head>
        <title>Avid Shop | Cart</title>
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
        
<!-- Start of Cart Section -->
<div class="cart-page-container">
    <h1 class="cart-title">Shopping Cart</h1>

    <!-- Cart Items Table -->
    <table class="cart-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Details</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://via.placeholder.com/70" alt="Product Image"></td>
                <td class="product-details">
                    <p class="product-name">Reversible Octopus Plush</p>
                    <p class="product-variation">Variation: Black + Grey</p>
                </td>
                <td>₱48</td>
                <td>
                    <input type="number" value="1" min="1" style="width: 50px; padding: 5px; text-align: center;">
                </td>
                <td>₱48</td>
                <td><button class="delete-button">Delete</button></td>
            </tr>
            <tr>
                <td><img src="https://via.placeholder.com/70" alt="Product Image"></td>
                <td class="product-details">
                    <p class="product-name">MSI MAG B460M Mortar</p>
                    <p class="product-variation">Variation: LGA 1200</p>
                </td>
                <td>₱5,759</td>
                <td>
                    <input type="number" value="1" min="1" style="width: 50px; padding: 5px; text-align: center;">
                </td>
                <td>₱5,759</td>
                <td><button class="delete-button">Delete</button></td>
            </tr>
        </tbody>
    </table>

    <!-- Motivators! -->
    <div class="motivators-section">
        <p>Keep yourself strong, do you want to know the secret to be strong? 
            <a href="#">Secret Formula</a>
        </p>
    </div>

    <div class="cart-summary">
        <p>Subtotal: ₱5,807</p>
        <p>Shipping: ₱120</p>
        <p class="total">Total: ₱5,927</p>
        <button class="checkout-button" onclick="openModal()">Check Out</button>
    </div>
</div>
<!-- Modal Background Overlay -->
<div class="checkout-modal-overlay" id="checkout-modal" style="display:none;">
<div class="checkout-modal-container">
<div class="checkout-modal-header">
<h2><i class="fas fa-bolt" style="margin-right: 1px; font-size: 24px; color: green"></i> Speed Checkout</h2>
<button class="checkout-modal-close-btn" onclick="closeModal()">×</button>
</div>

<div class="checkout-modal-step-navigation">
<div class="checkout-modal-step active" data-step="1" onclick="nextStep(1)">Address</div>
<div class="checkout-modal-step" data-step="2" onclick="nextStep(2)">Shipping Method</div>
<div class="checkout-modal-step" data-step="3" onclick="nextStep(3)">Payment Method</div>
</div>

<!-- Step 1 Content -->
<div class="checkout-modal-step-content active" id="step-1">
<div class="checkout-modal-form-group">
    <label for="address">Address</label>
    <div class="radio-group">
        <div class="radio-option">
            <input type="radio" name="address" id="address-1" autocomplete="off" checked>
            <label for="address-1" class="label-text">0034 Arroyo Corner Burgos Street, Zone 1, Barangay Zone 1 (Pob.), Santa Barbara, Visayas, Iloilo 5002 (+63) 9276865002</label>
        </div>
        <div class="radio-option">
            <input type="radio" name="address" id="address-2" autocomplete="off">
            <label for="address-2" class="label-text">456 Oak Ave, Another Town, ZIP 67890</label>
        </div>
        <div class="radio-option">
            <input type="radio" name="address" id="address-3" autocomplete="off">
            <label for="address-3" class="label-text">789 Pine Blvd, Third City, ZIP 11223</label>
        </div>
    </div>
</div>
<p class="suggestion-cart-paragraph" id="suggestioncart">Only 3 selected data are displayed. To see more, click the button below.</p>
<button class="checkout-modal-btn" onclick="goToCheckoutPage()">Go to Checkout</button>
<br>
<br>
<button class="checkout-modal-btn secondary" onclick="closeModal()">Back</button>
<button class="checkout-modal-btn" onclick="nextStep(2)">Next</button>
</div>

<!-- Step 2 Content -->
<div class="checkout-modal-step-content" id="step-2">
<div class="checkout-modal-form-group">
    <label for="shipping-method">Shipping Method</label>
    <div class="radio-group">
        <div class="radio-option">
            <input type="radio" name="shipping" id="standard-shipping" autocomplete="off" checked>
            <label for="standard-shipping" class="label-text">Standard Shipping</label>
        </div>
        <div class="radio-option">
            <input type="radio" name="shipping" id="express-shipping" autocomplete="off">
            <label for="express-shipping" class="label-text">Express Shipping</label>
        </div>
        <div class="radio-option">
            <input type="radio" name="shipping" id="smuggler-shipping" autocomplete="off">
            <label for="smuggler-shipping" class="label-text">Smuggler Shipping</label>
        </div>
    </div>
</div>
<p class="suggestion-cart-paragraph" id="suggestioncart">Only 3 selected data are displayed. To see more, click the button below.</p>
<button class="checkout-modal-btn" onclick="goToCheckoutPage()">Go to Checkout</button>
<br>
<br>
<button class="checkout-modal-btn secondary" onclick="prevStep(1)">Back</button>
<button class="checkout-modal-btn" onclick="nextStep(3)">Next</button>
</div>

<!-- Step 3 Content -->
<div class="checkout-modal-step-content" id="step-3">
<div class="checkout-modal-form-group">
    <label for="payment-method">Payment Method</label>
    <div class="radio-group">
        <div class="radio-option">
            <input type="radio" name="payment" id="credit-card" autocomplete="off" checked>
            <label for="credit-card" class="label-text">Credit Card (Bank: XYZ Bank, Account: 1122334455)</label>
        </div>
        <div class="radio-option">
            <input type="radio" name="payment" id="paypal" autocomplete="off">
            <label for="paypal" class="label-text">PayPal (Account: example@paypal.com)</label>
        </div>
        <div class="radio-option">
            <input type="radio" name="payment" id="crypto" autocomplete="off">
            <label for="crypto" class="label-text">Crypto (Account: 0x3E8B02eFe8A3489b72C6f63b351C1A11E3d)</label>
        </div>
    </div>
</div>
<p class="suggestion-cart-paragraph" id="suggestioncart">Only 3 selected data are displayed. To see more, click the button below.</p>
<button class="checkout-modal-btn" onclick="goToCheckoutPage()">Go to Checkout</button>
<br>
<br>
<button class="checkout-modal-btn secondary" onclick="prevStep(2)">Back</button>
<button class="checkout-modal-btn" onclick="submitCheckout()">Submit</button>
</div>

<!-- Confirmation Dialog -->
<div id="confirmation-dialog" class="confirmation-dialog">
<div class="confirmation-dialog-content">
    <p class="checkout-confirmation-paragraph" id="checkoutconfirmation">Are you sure you want to proceed to checkout?</p>
    <button class="checkout-modal-btn secondary" onclick="closeConfirmationDialog()">No</button>
    <button class="checkout-modal-btn" onclick="proceedToCheckout()">Yes</button>
</div>
</div>
</div>
</div>



</div>
<script>
// Show the confirmation dialog if the button was clicked then will be redirected to checkout modal //
function goToCheckoutPage() {
showConfirmationDialog();  
}

// Show confirmation dialog alert when the user clicks 
function showConfirmationDialog() {
document.getElementById('confirmation-dialog').style.display = 'flex';
}

// Close confirmation dialog
function closeConfirmationDialog() {
document.getElementById('confirmation-dialog').style.display = 'none';
}

// Proceed to checkout when the user pressed yes
function proceedToCheckout() {
window.location.href = '/checkout'; 
}

// Shows the hidden modal after pressing the checkout button //
function openModal() {
document.getElementById('checkout-modal').style.display = 'flex';
}
// Close modal overlay dialog
function closeModal() {
document.getElementById('checkout-modal').style.display = 'none';
}

// Hidden data purpose for this is to show the other hidden labels data after pressing the other tabs or the buttons //
function nextStep(step) {
navigateToStep(step);
}

function prevStep(step) {
navigateToStep(step);
}

function navigateToStep(step) {
document.querySelector('.checkout-modal-step-content.active').classList.remove('active');
document.querySelector('.checkout-modal-step.active').classList.remove('active');
document.getElementById(`step-${step}`).classList.add('active');
document.querySelector(`.checkout-modal-step[data-step="${step}"]`).classList.add('active');
}





</script>

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
