<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Item</title>
        <head>
            <style>
                /* General Styles */
                body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                background-color: #f8f8f8;
                }
            /* Header container (Header-Section-Div) */
            .Header-Section-Div {
                    width: 100%;
                    height: 124px;
                    background: white;
                    border-bottom: 1px solid rgba(96, 91, 91, 0.30);
                    display: flex;
                    align-items: center;
                    padding: 0 20px;
                    position: relative;
                }

                /* Logo (MainLogo1) */
                .MainLogo1 {
                    width: 140px;
                    height: 115px;
                    margin-right: 20px;
                    cursor: pointer; 
                }

                /* Search bar container (Frame49) */
                .search-bar-container {
                    width: 900px;
                    height: 45px;
                    background: #FFFAFA;
                    border: 2px solid #04641B;
                    border-radius: 40px;
                    display: flex;
                    align-items: center;
                    padding: 0 15px;
                    margin-left: 195px;
                    position: relative;
                }

                /* Input field */
                .search-input {
                    flex: 1;
                    height: 100%;
                    border: none;
                    outline: none;
                    background: transparent;
                    font-size: 16px;
                    padding-left: 20px;
                    color: #333;
                }

                /* Search icon container */
                .search-icon {
                    width: 42px;
                    height: 42px;
                    background: #c6dfd2;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                /* Search icon image */
                .search-icon img {
                    width: 20px;
                    height: 20px;
                }

                /* Cart container */
                .cart-container {
                    position: relative; 
                    width: 42px;
                    height: 42px;
                    display: flex;
                    align-items: center;
                    gap: 11px;
                    cursor: pointer; 
                    margin-left: 225px;
                    z-index: 0;
                }

                /* Shopping cart icon */
                .cart-icon {
                    width: 42px;
                    height: 42px;
                }



                /* Cart info that appears when hovered */
                .cart-info {
                    position: absolute;
                    top: 135%; 
                    left: -370px;
                    width: 390px;
                    max-height: 600px; 
                    padding: 10px;
                    background-color: #FFFAFA;
                    border: 1px solid #04641B;
                    border-radius: 8px;
                    text-align: center;
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s ease, visibility 0s 0.3s;
                    z-index: 10; 
                }


                /* Show the cart info when hovering over the cart container */
                .cart-container:hover .cart-info {
                    opacity: 1; 
                    visibility: visible; 
                    transition: opacity 0.3s ease, visibility 0s 0s;
                }

                /* Green Added product signifier */
                .added-product-signifier {
                    font-size: 14px;
                    font-weight: bold;
                    color: rgba(0, 128, 0, 0.5); 
                    margin-bottom: 5px; 
                }

                /* Arrow next to cart info */
                .cart-info::before {
                    content: '';
                    position: absolute;
                    top: -10px; 
                    left: 95%; 
                    transform: translateX(-50%); 
                    border-left: 10px solid transparent;
                    border-right: 10px solid transparent;
                    border-bottom: 10px solid #04641B; 
                }

                /* Styling for the cart items list */
                .cart-items {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    max-height: 180px; 
                    overflow: hidden; 
                }

                /* Individual cart item */
                .cart-item {
                    display: flex;
                    align-items: center;
                    margin-bottom: 10px;
                    font-size: 14px;
                }

                /* Product image */
                .cart-item img {
                    width: 50px;
                    height: 50px;
                    border-radius: 8px;
                    margin-right: 10px;
                    object-fit: cover;
                    border: 1px solid #ddd; 
                }

                /* Item details container */
                .item-details {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }

                /* Item name */
                .item-name {
                    font-size: 13px;
                    font-weight: 500;
                    color: #333; 
                    margin-bottom: 5px;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                    max-width: 150px; 
                }

                /* Item price */
                .item-price {
                    font-size: 14px;
                    font-weight: bold;
                    color: #04641B;
                    position: absolute;
                    margin-left: 248px;
                }

                /* Extra items text and button container */
                .view-more-container {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    margin-top: 10px;
                }

                .view-more {
                    width: 38%;
                    padding: 8px;
                    background-color: #04641B;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    text-align: center;
                    cursor: pointer;
                    font-size: 14px;
                    height: 38px
                }

                .extra-items-text {
                    font-size: 14px;
                    color: #666; 
                    white-space: nowrap;
                    margin-left: 10px;
                }
                /* Hover effect for menu items */
                .cart-items li:hover {
                    background-color: rgba(4, 100, 27, 0.1); 
                    color: #04641B; 
                }



                /* Account Setting Container */
                .account-setting-container {
                    width: auto;
                    height: 51px;
                    display: inline-flex;
                    justify-content: center;
                    align-items: center;
                    gap: 12px;
                    margin-left: 30px;
                    position: relative;
                    z-index: 10;
                }

                /* Image Style */
                .account-logo {
                    width: 42px;
                    height: 42px;
                }

                
                /* Account Name */
                .account_name {
                    color: black;
                    font-size: 19px;
                    font-family: 'Noto Music', sans-serif;
                    font-weight: 400;
                    word-wrap: break-word;
                    display: inline-block;
                    text-align: center;
                    vertical-align: middle;
                    transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; 
                }

                /* Account Name hover effect */
                .account_name:hover {
                    color: #04641B;
                    transform: translateY(-2px); 
                }

                .drop-down-setting {
                    position: absolute;
                    top: 125%;
                    left: -185px;
                    width: 390px;
                    max-height: 200px; 
                    padding: 10px;
                    background-color: #FFFAFA;
                    border: 1px solid #04641B;
                    border-radius: 8px;
                    text-align: center;
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s ease, visibility 0s 0.3s;
                    z-index: 1; 
                }


                /* Show the cart info when hovering over the cart container */
                .account-setting-container:hover .drop-down-setting {
                    opacity: 1; /* Makes the hidden cart info visible */
                    visibility: visible; /* Ensures it is interactable */
                    transition: opacity 0.3s ease, visibility 0s 0s; /* Smooth fade-in */
                }

                /* Account Setting Dropdown Styling */
                .account-dropdown {
                    position: absolute;
                    top: 77%; 
                    right: -50px; 
                    width: 200px; 
                    background-color: #FFFAFA;
                    border: 1px solid #04641B; 
                    border-radius: 8px;
                    padding: 5px 0;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
                    opacity: 0; 
                    visibility: hidden; 
                    transition: opacity 0.3s ease, visibility 0s 0.3s; 
                    z-index: 1; 
                }

                /* Show the dropdown when hovering over the account setting container */
                .account-setting-container:hover .account-dropdown {
                    opacity: 1; 
                    visibility: visible; 
                    transition: opacity 0.3s ease, visibility 0s 0s; 
                }

                /* Arrow next to account-dropdown */
                .account-dropdown::before {
                    content: '';
                    position: absolute;
                    top: -10px; 
                    left: 50%; 
                    transform: translateX(-50%); 
                    border-left: 10px solid transparent;
                    border-right: 10px solid transparent;
                    border-bottom: 10px solid #04641B; 
                }

                /* Dropdown Menu Items */
                .account-dropdown li {
                    list-style: none;
                    padding: 10px 15px;
                    font-size: 14px;
                    font-weight: 500;
                    color: #333; 
                    cursor: pointer;
                    transition: background-color 0.2s ease, color 0.2s ease; 
                }

                /* Hover effect for menu items */
                .account-dropdown li:hover {
                    background-color: rgba(4, 100, 27, 0.1); 
                    color: #04641B; 
                }
                /* This is where the header ends */



            /* Order-Section Design */  
            .order-section {
                padding: 30px;
                max-width: 1200px;
                margin: auto;
                display: flex;
                flex-direction: column;
                gap: 30px;
            }

            /* Top left corner signifier of the location */  
            .placeholder-category-product-name {
                font-size: 14px;
                color: #999;
                margin-bottom: 20px;
            }

            .placeholder-category-product-name span {
                font-weight: bold;
                color: #333;
            }

            /* Order Container */  
            .order-container {
                display: flex;
                gap: 40px;
            }

            .product-image {
                flex: 1;
            }

            .main-image {
                width: 100%;
                height: auto;
                border-radius: 8px;
                margin-bottom: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .thumbnail-images {
                display: flex;
                gap: 10px;
            }

            .thumbnail-images img {
                width: 133px;
                height: 130px;
                border-radius: 5px;
                cursor: pointer;
                border: 2px solid transparent;
                transition: border-color 0.3s;
            }

            .thumbnail-images img:hover {
                border-color: #1e9b3b;
            }

            .product-details {
                flex: 1;
            }

            .product-details h1 {
                font-size: 28px;
                margin: 0;
                font-weight: bold;
                color: #333;
            }

            .price {
                font-size: 24px;
                color: #333;
                margin: 10px 0;
            }

            .rating {
                font-size: 14px;
                color: #1e9b3b;
                margin-bottom: 10px;
            }

            .description {
                font-size: 16px;
                color: #555;
                margin-bottom: 20px;
                line-height: 1.6;
            }

            .colors {
                display: flex;
                gap: 10px;
                margin-bottom: 20px;
            }

            .color-option {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                border: 1px solid #ddd;
                cursor: pointer;
            }

            .quantity-selector {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 20px;
            }

            .quantity-selector button {
                background-color: #ddd;
                border: none;
                padding: 5px 10px;
                cursor: pointer;
                font-size: 18px;
                border-radius: 4px;
            }

            .quantity-selector span {
                font-size: 16px;
                font-weight: bold;
            }

            .add-to-cart {
                background-color: #23db4d;
                color: #000000;
                padding: 10px 23px;
                border: none;
                border-radius: 5px;
                font-size: 20px;
                cursor: pointer;
                margin-bottom: 20px;
                transition: background-color 0.3s;
            }

            .add-to-cart:hover {
                background-color: #15b83b;;
            }

            .wishlist {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .wishlist i {
                color: #09ac2f;
                font-size: 20px;
            }

            .wishlist a {
                font-size: 19px;
                color: #1e9b3b;
                text-decoration: none;
            }

            .wishlist a:hover {
                text-decoration: underline;
            }




            </style>
    </head>
    <body>
        <div class="Header-Section-Div">
            <!-- Logo -->
            <img class="MainLogo1" src="https://via.placeholder.com/205x175" />
            

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
                <img src="https://via.placeholder.com/20x20" alt="Search">
            </div>
        </div>
        <!-- Cart icon -->
        <div class="cart-container">
            <img class="cart-icon" src="https://via.placeholder.com/42x42" alt="Shopping Cart Icon">
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
            <!-- Account Setting -->
            <div class="account-setting-container">
                <img class="Image10" src="https://via.placeholder.com/42x42" alt="User Icon">
                <div class="account_name">Aaron Paul</div>
                
                <!-- Dropdown Menu -->
                <ul class="account-dropdown">
                    <li>My Account</li>
                    <li>My Purchase</li>
                    <li>Logout</li>
                </ul>
            </div>
        </div>

        <!-- Order Section -->
        <div class="order-section">
            <!-- Example Placeholder Category / Product name -->
            <div class="placeholder-category-product-name">Fitness / <span>Marijuana</span></div>
        
            <div class="order-container">
              <div class="product-image">
                <!-- Product Image -->
                <img src="chair.png" alt="Placeholder-Image-Marijuana" class="main-image">
                <!-- Additional Image Can Simply an Image -->
                <div class="thumbnail-images">
                  <img src="thumbnail1.png" alt="Thumbnail 1">
                  <img src="thumbnail2.png" alt="Thumbnail 2">
                  <img src="thumbnail3.png" alt="Thumbnail 3">
                  <img src="thumbnail4.png" alt="Thumbnail 4">
                </div>
              </div>
        
              <!-- Product Details Section -->
              <div class="product-details">
                <h1>Marijuana</h1>
                <p class="price">$5,000</p>
                <div class="rating">
                  <span>⭐ 4.6 / 5.0 (556)</span>
                </div>
                <p class="description">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse dolores blanditiis magni odio praesentium numquam, nesciunt quo voluptas culpa vel, maiores eos expedita ratione quos nostrum odit sequi, natus error.
                </p>
                <!-- Product Details Color Selection -->
                <div class="colors">
                  <span class="color-option" style="background-color: #e0d6c3;"></span>
                  <span class="color-option" style="background-color: #13e459;"></span>
                  <span class="color-option" style="background-color: #3a3a3a;"></span>
                  <span class="color-option" style="background-color: #ffffff;"></span>
                </div>
                <div class="quantity-selector">
                  <button>-</button>
                  <span>1</span>
                  <button>+</button>
                </div>
                <!-- Order Button for the eyes -->
                <button class="add-to-cart">Add to Cart</button>
                <div class="wishlist">
                    <i class="fas fa-heart"></i>
                  <a href="#">Add to Wishlist</a>
                </div>
              </div>
            </div>
          </div>
        

    </body>
</html>
