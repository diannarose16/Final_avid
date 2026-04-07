<html>
    <head>
        <style>
            /****  Header Start  *****/
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




        </style>
    </head>
    <body>
        <div class="Header-Section-Div">
            <!-- Logo -->
            <a href=""><img class="MainLogo1" src="https://via.placeholder.com/205x175" /></a>
            

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
            <a href=""><img class="cart-icon" src="https://via.placeholder.com/42x42" alt="Shopping Cart Icon"></a>
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
                <a href=""><button class="view-more">View More</button></a>
            </div>
        </div>
        </div>
            <!-- Account Setting -->
            <div class="account-setting-container">
                <a href=""> <img class="account-logo" src="https://via.placeholder.com/42x42" alt="User Icon"></a>
                <div class="account_name"><a href="">Aaron Paul</a></div>
                
                <!-- Dropdown Menu -->
                <ul class="account-dropdown">
                    <li><a href="">My Account</a></li>
                    <li><a href="">My Purchase</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </div>
        

        </div>
    </body>
</html>
