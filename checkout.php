<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking-Out</title>
    <style>
   /* General Reset */
   * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: Arial, sans-serif;
        }

        /* Header container */
        .Header-Section-Div {
            width: 100%;
            height: 80px;
            background: white;
            border-bottom: 1px solid rgba(96, 91, 91, 0.30);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        /* Logo and Brand */
        a {
            text-decoration: none;
            color: inherit; 
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .MainLogo1 {
            width: 40px;
            height: 40px;
        }

        .brand-name {
            font-size: 22px;
            color: #1d8535;
            font-weight: bold;
        }

        .divider {
            height: 30px;
            width: 2px;
            background-color: #1d8535;
        }

        .checkout-text {
            font-size: 22px;
            font-weight: bold;
            color: #065d83;
        }


        /* Account Section */
        .account-setting-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .account-logo {
            width: 32px;
            height: 32px;
        }

        .account_name {
            color: #065d83;
            font-size: 19px;
            font-weight: 400;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }

        .account_name:hover {
            color: #04641B;
        }
        /* Order Container */
        .order-summary {
                font-family: Arial, sans-serif;
                background: #FFFFFF;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                max-width: 96%;
                margin: 0 auto;
                margin-top: 15px;
            }

        /* Overall Paragraphs Design inside order content */
        .order-summary-section {
            margin-bottom: 20px;
            border-bottom: 1px solid #E0E0E0;
            padding-bottom: 20px;
        }

        .order-summary-section:last-child {
            border-bottom: none;
        }
        /* Overall Header Design inside order content */
        .order-summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .order-summary-header h3 {
            font-size: 25px;
            font-weight: 600;
            color: #333333;
        }
        /* Change link design */
        .order-summary-button, .order-summary-action {
            background: none;
            border: none;
            color: #065d83; 
            font-size: 16px;
            font-style: bold;
            cursor: pointer;
        }

        .order-summary-button:hover, .order-summary-action:hover {
            color: #05445f ;

        }

        .order-summary p {
            font-size: 16px;
            line-height: 1.6;
            color: #666666;
        }

        .order-summary strong {
            color: #333333;
        }

        /* Ordered Product Item Design */
        .order-summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .order-summary-table thead {
            background: #F9F9F9;
        }

        .order-summary-table th, .order-summary-table td {
            text-align: left;
            padding: 10px;
            font-size: 16px;
        }
        .order-summary-total {
            text-align: right;

            font-weight: bold;
            margin-top: 10px;
            margin-right: 10px;
        }

        .order-summary-table th {
            font-weight: 600;
            color: #333333;
        }

        .order-summary-table tbody tr {
            border-bottom: 1px solid #E0E0E0;
        }

        /* Order-Checkout Button */
        .order-summary-btn {
            display: block;
            width: 12%;
            padding: 15px;
            background-color: #04641B;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            margin-left: 88%;
        }

        .order-summary-btn:hover {
            background-color: #034D15; 
        }

        /************************************************************************** MODAL STYLES **************************************************************************/
        /* Addres Modal Section */
    .address-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #FFFFFF;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        max-width: 1085px;
        width: 100%;
        display: none;
        z-index: 1000;
        max-height: 650px;
        height: 100%;
        overflow-y: auto; /* Ensure content is scrollable if too long */
    }

    /* Address Modal Header */
    .address-modal-header {
        font-size: 22px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
        position: relative;
    }

    /* Close Button "X" Design */
    .checkout-address-modal-close-btn-site {
        position: absolute;
        top: 10px;
        right: 15px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #3d3f42;
        transition: color 0.3s ease;
    }

    .checkout-address-modal-close-btn-site:hover {
        color: #04641B;
    }


    /* Custom Scrollbar for Address */
    .address-radio-group::-webkit-scrollbar {
        width: 8px;
    }

    .address-radio-group::-webkit-scrollbar-thumb {
        background-color: #04641B; 
        border-radius: 4px;
    }

    .address-radio-group::-webkit-scrollbar-track {
        background-color: #F4F4F4; 
    }


    /* Radio Buttons Address */
    .address-radio-group {
        max-height: 60vh; 
        overflow-y: auto;
        padding-right: 10px; 
    }
    /* Address Radio Options */
    .address-radio-option {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        cursor: pointer;
        padding: 15px;
        border: 1px solid #E0E0E0;
        border-radius: 5px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .address-radio-option:hover {
        background-color: #f9f9f9;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .address-radio-option input[type="radio"] {
        appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #333;
        border-radius: 50%;
        margin-top: 3px;
        position: relative;
        cursor: pointer;
    }

    .address-radio-option input[type="radio"]:checked {
        border-color: #04641B;
    }

    .address-radio-option input[type="radio"]:checked::after {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #04641B;
        border-radius: 50%;
        top: 3px;
        left: 3px;
    }

    .address-radio-option label {
        font-size: 16px;
        color: #333;
        line-height: 1.5;
        cursor: pointer;
        flex-grow: 1;
    }

    /* Address Button Container */
    .address-modal-buttons {
        display: flex;
        justify-content: flex-end; 
        gap: 10px; 
        margin-top: 265px;
    }
    /* Adjust Action Buttons Position */
    .address-modal-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 20px; 
    }

    /* Address Action Buttons */
    .address-modal-close {
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.5s ease, box-shadow 0.5s ease;
    }



    /* Address Cancel Button */
    .address-modal-close#cancelModal {
        background-color: #555c65;
        color: #ffffff;
    }

    .address-modal-close#cancelModal:hover {
        background-color: #d6d6d6; 
    }

    /* Address Confirm Button */
    .address-modal-close#confirmModal {
        background-color: #04641B;
        color: #FFFFFF; 
    }

    .address-modal-close#confirmModal:hover {
        background-color: #034d16; 
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); 
    }

    /* Shipping Modal Section */
    /* Shipping modal address-mode-overlay */
    #shipping-mode-address-mode-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }

    /* Shipping modal style*/
    .shipping-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 600px;
        max-height: 80vh; 
        display: none;
        z-index: 1000;
        overflow: hidden; 
    }

    /* Shipping modal header */
    .shipping-modal-header {
        font-size: 22px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
    }

    /* Shipping options container */
    .shipping-options-container {
        max-height: 60vh;
        overflow-y: auto; 
        padding-right: 10px; 
    }

    /* Custom scrollbar for Shipping Mode */
    .shipping-options-container::-webkit-scrollbar {
        width: 8px;
    }

    .shipping-options-container::-webkit-scrollbar-thumb {
        background: #1d8535; 
        border-radius: 4px;
    }

    .shipping-options-container::-webkit-scrollbar-track {
        background: #f4f4f4; 
    }

    /* Individual shipping option */
    .shipping-option {
        display: flex;
        flex-direction: column;
        padding: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
    }

    .shipping-option-header {
        display: flex;
        justify-content: space-between;
        font-size: 18px;
        color: #333;
        font-weight: bold;
        cursor: pointer;
    }

    .shipping-toggle {
        font-size: 18px;
        color: #333;
    }

    .shipping-option-details {
        margin-top: 10px;
        padding-left: 10px;
    }

    /* Shipping Mode Radio Options */
    .shipping-address-radio-group {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .shipping-radio-option {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 10px;
        border: 1px solid #1d8535;
        border-radius: 5px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .shipping-radio-option:hover {
        background-color: #f4fdf4;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .shipping-radio-option input[type="radio"] {
        appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #1d8535;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
    }

    .shipping-radio-option input[type="radio"]:checked {
        border-color: #04641b;
    }

    .shipping-radio-option input[type="radio"]:checked::after {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #04641b;
        border-radius: 50%;
        top: 3px;
        left: 3px;
    }

    .shipping-description {
        font-size: 14px;
        color: #666;
        margin-top: 5px;
    }

    /* Shipping Mode Buttons */
    .shipping-modal-action-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 20px;
    }

    /* Shipping Mode Cancel and Confirm buttons */
    .shipping-address-modal-close-btn {
        padding: 10px 15px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 5px;
        cursor: pointer;
        border: none;
        transition: background-color 0.5s ease, box-shadow 0.5s ease;
    }
    /* Shipping Mode Cancel Button */
    .shipping-address-modal-close-btn#shippingCloseModal{
        background-color: #555c65;
        color: #ffffff;
    }

    .shipping-address-modal-close-btn#shippingCloseModal:hover {
        background-color: #d6d6d6; /* Darker gray on hover */
    }

    /* Shipping Mode Confirm Button */
    .shipping-address-modal-close-btn#shippingConfirmModal {
        background-color: #04641B; /* Green background */
        color: #FFFFFF; /* White text */
    }

    .shipping-address-modal-close-btn#shippingConfirmModal:hover {
        background-color: #034d16; /* Darker green on hover */
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); /* Add slight shadow effect */
    }


    /* Overlay for the payment method modal */
    #payment-method-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }

    /* Payment method modal styling */
    .payment-method-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 600px;
        max-height: 80vh; 
        display: none;
        z-index: 1000;
        overflow: hidden; 
    }

    /* Payment method modal header */
    .payment-method-modal-header {
        font-size: 22px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
    }

    /* Close button styling in Payment Method Modal */
    .payment-method-closeModal {
        font-size: 24px;
        background: none;
        border: none;
        color: #333;
        cursor: pointer;
    }

    /* Payment method options container */
    .payment-method-options-container {
        max-height: 60vh;
        overflow-y: auto; 
        padding-right: 10px; 
    }

    /* Custom scrollbar for a Payment Method Modal */
    .payment-method-options-container::-webkit-scrollbar {
        width: 8px; /* Set scrollbar width */
    }

    .payment-method-options-container::-webkit-scrollbar-thumb {
        background: #1d8535; 
        border-radius: 4px; 
    }

    .payment-method-options-container::-webkit-scrollbar-track {
        background: #f4f4f4; 
    }
    /* Individual payment method option */
    .payment-method-option {
        display: flex;
        flex-direction: column;
        padding: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
    }

    .payment-method-option-header {
        display: flex;
        justify-content: space-between;
        font-size: 18px;
        color: #333;
        font-weight: bold;
        cursor: pointer;
    }

    .payment-method-option-details {
        margin-top: 10px;
        padding-left: 10px;
    }

    .payment-method-radio-group {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    /* Payment Method Radio Options*/
    .payment-method-radio-option {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 10px;
        border: 1px solid #1d8535;
        border-radius: 5px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .payment-method-radio-option:hover {
        background-color: #f4fdf4;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .payment-method-radio-option input[type="radio"] {
        appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #1d8535;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
    }

    .payment-method-radio-option input[type="radio"]:checked {
        border-color: #04641b;
    }

    .payment-method-radio-option input[type="radio"]:checked::after {
        content: "";
        position: absolute;
        width: 12px;
        height: 12px;
        background-color: #04641b;
        border-radius: 50%;
        top: 3px;
        left: 3px;
    }

    /* Payment Method Buttons */
    .payment-method-modal-action-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 20px;
    }

    /* Payment Cancel and Confirm buttons */
    .payment-method-modal-close-btn {
        padding: 10px 15px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 5px;
        cursor: pointer;
        border: none;
        transition: background-color 0.5s ease, box-shadow 0.5s ease;
    }

    /* Payment Cancel Button */
    .payment-method-modal-close-btn#paymentCloseModal{
        background-color: #555c65;
        color: #ffffff;
    }

    .payment-method-modal-close-btn#paymentCloseModal:hover {
        background-color: #d6d6d6; /* Darker gray on hover */
    }

    /* Payment Confirm Button */
    .payment-method-modal-close-btn#paymentConfirmModal {
        background-color: #04641B; /* Green background */
        color: #FFFFFF; /* White text */
    }

    .payment-method-modal-close-btn#paymentConfirmModal:hover {
        background-color: #034d16; /* Darker green on hover */
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); /* Add slight shadow effect */
    }



    </style>
</head>
<body>
    <div class="Header-Section-Div">
        <!-- Logo and Brand Name -->
        <div class="logo-container">
            <a href="" class="logo-container">
                <img class="MainLogo1" src="https://via.placeholder.com/40" alt="Logo">
                <span class="brand-name">AVID</span>
                <div class="divider"></div>
                <span class="checkout-text">Checkout</span>
            </a>            
        </div>


        <!-- Account Section -->
        <div class="account-setting-container">
            <img class="account-logo" src="https://via.placeholder.com/32" alt="Account Icon">
            <span class="account_name">Account</span>
        </div>
    </div>
    
    <div class="order-summary">
        <!-- Delivery Address Section -->
        <div class="order-summary-section">
            <div class="order-summary-header">
                <h3>Delivery Address</h3>
                <button id="showAddresses" class="order-summary-button">Show More</button>
            </div>
            <p><strong>Aaron Paul Villanueva</strong><br>
                0034 Arroyo Corner Burgos Street, Zone 1, Barangay Zone 1 (Pob.), Santa Barbara, Visayas, Iloilo 5002<br>
                (+63) 9276865002
            </p>
        </div>

        <!-- Products Ordered Section -->
        <div class="order-summary-section">
            <div class="order-summary-header">
                <h3>Products Ordered</h3>
            </div>
            <table class="order-summary-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MSI MAG B460M Mortar Motherboard</td>
                        <td>₱5,700</td>
                        <td>1</td>
                        <td>₱5,700</td>
                    </tr>
                    <tr>
                        <td>Electronic Protection</td>
                        <td>₱242</td>
                        <td>1</td>
                        <td>₱242</td>
                    </tr>
                </tbody>
            </table>
            <p class="order-summary-total">Total: ₱5,954</p>
        </div>

        <!-- Shipping Mode Section -->
        <div class="order-summary-section">
            <div class="order-summary-header">
                <h3>Shipping Mode</h3>
                <span class="order-summary-action" id="showShipping">Change</span>
            </div>
            <p>Overseas Shipping (Standard International)</p>
        </div>

        <!-- Payment Mode Section -->
        <div class="order-summary-section">
            <div class="order-summary-header">
                <h3>Payment Mode</h3>
                <span class="order-summary-action" id="showPayment">Change</span>
            </div>
            <p>Cash on Delivery</p>
        </div>

        <!-- Place Order Button -->
        <button class="order-summary-btn">Place Order</button>

<!------------------------------------------------------------------------------- All Hidden DIV For MODAL ------------------------------------------------------------------------------->
        <!-- Address Modal  -->
        <div class="address-mode-overlay" id="address-mode-overlay"></div>
        <div class="address-modal" id="addressModal">
            <div class="address-modal-header">Select an Address</div>
            <button class="address-closeModal checkout-address-modal-close-btn-site">×</button>
            <div class="address-radio-group">
                <!-- Address Placeholder For the eyes only -->
                <div class="address-radio-group">
                    <div class="address-radio-option">
                        <input type="radio" name="address" id="address1" value="address1" checked>
                        <label for="address1">
                            <strong>Aaron Paul Villanueva</strong><br>
                            0034 Arroyo Corner Burgos Street, Zone 1, Barangay Zone 1 (Pob.), Santa Barbara, Visayas, Iloilo 5002<br>
                            (+63) 9276865002
                        </label>
                    </div>
                    <div class="address-radio-option">
                        <input type="radio" name="address" id="address2" value="address2">
                        <label for="address2">
                            <strong>John Doe</strong><br>
                            123 Example Street, Cityville, Metro City, 12345<br>
                            (+63) 9876543210
                        </label>
                    </div>
                </div>
            </div>
            <div class="address-modal-buttons">
                <button class="address-closeModal address-modal-close" id="cancelModal">Cancel</button>
                
                <button class="address-modal-close" id="confirmModal">Confirm</button>
            </div>
        </div>

        <!-- Shipping Modal -->
         <!-- shipping-mode-overlay Element -->
        <div id="shipping-mode-address-mode-overlay" style="display: none;"></div>
        <div class="shipping-modal">
            <div class="shipping-modal-header">
                Select Shipping Option
                <button class="shipping-closeModal checkout-address-modal-close-btn-site">×</button>
            </div>
            <!-- Shipping Modal Container -->
            <div class="shipping-options-container">
                <div class="shipping-option">
                    <!-- Shipping Placeholder for the eyes only -->
                    <div class="shipping-option-header">
                        <span class="shipping-location">Overseas Shipping</span>
                        <span class="shipping-toggle">+</span>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Standard International</span>
                                <span class="shipping-cost">₱98</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 5 Dec
                            </div>
                        </div>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Standard International</span>
                                <span class="shipping-cost">₱98</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 5 Dec
                            </div>
                        </div>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Standard International</span>
                                <span class="shipping-cost">₱98</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 5 Dec
                            </div>
                        </div>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Standard International</span>
                                <span class="shipping-cost">₱98</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 5 Dec
                            </div>
                        </div>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Standard International</span>
                                <span class="shipping-cost">₱98</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 5 Dec
                            </div>
                        </div>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Standard International</span>
                                <span class="shipping-cost">₱98</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 5 Dec
                            </div>
                        </div>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Express Way</span>
                                <span class="shipping-cost">₱2,521</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 1 Dec
                            </div>
                        </div>
                    </div>
                    <div class="shipping-option-details">
                        <div class="shipping-address-radio-group">
                            <label class="shipping-radio-option">
                                <input type="radio" name="shippingOption" />
                                <span class="shipping-type">Smugglers Enterprise</span>
                                <span class="shipping-cost">₱2,521</span>
                            </label>
                            <div class="shipping-description" id="showShipping">
                                Guaranteed to get by 29 Nov - 29 Nov "Take note might get abolish"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shipping Modal Buttons -->
            <div class="shipping-modal-action-buttons">
                <button class="shipping-closeModal shipping-address-modal-close-btn" id="shippingCloseModal">Cancel</button>
                <button class="shipping-closeModal shipping-address-modal-close-btn" id="shippingConfirmModal">Confirm</button>
            </div>
        </div>

        <!-- Overlay for the payment method modal -->
    <div id="payment-method-overlay" style="display: none;"></div>

    <!-- Payment Method Modal Structure -->
    <div class="payment-method-modal">
        <div class="payment-method-modal-header">
            Select Payment Method
            <!-- Close button in the modal header for payment -->
            <button class="payment-method-closeModal checkout-address-modal-close-btn-site">×</button>
        </div>

        <!-- Payment options container -->
        <div class="payment-method-options-container">
            <div class="payment-method-option">
                <!-- Placeholder for the eyes only -->
                <div class="payment-method-option-header">
                    <span class="payment-method-location">ShopeePay</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">ShopeePay</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="payment-method-option">
                <div class="payment-method-option-header">
                    <span class="payment-method-location">Cash on Delivery</span>
                </div>
                <div class="payment-method-option-details">
                    <div class="payment-method-radio-group">
                        <label class="payment-method-radio-option">
                            <input type="radio" name="paymentOption" />
                            <span class="payment-method-type">Cash on Delivery</span>
                            <span class="payment-method-cost">₱0.00</span>
                        </label>
                    </div>
                </div>
            </div>
    </div>

    <!-- Payment Method Modal Buttons -->
    <div class="payment-method-modal-action-buttons">
        <button class="payment-method-closeModal payment-method-modal-close-btn" id="paymentCloseModal">Cancel</button>
        <button class="payment-method-closeModal payment-method-modal-close-btn" id="paymentConfirmModal">Confirm</button>
    </div>
</div>
    </div>
    <script>
        // Variables Assigned for the address change button //
        const showAddresses = document.getElementById('showAddresses');
        const addressOverlay = document.getElementById('address-mode-overlay');
        const addressModal = document.getElementById('addressModal');
        const addresscloseModalButtons = document.querySelectorAll('.address-closeModal');


        // Open modal when clicking on "Change" button
        showAddresses.addEventListener('click', () => {
            addressOverlay.style.display = 'block';
            addressModal.style.display = 'block';
        });

        // Close modal when clicking on any button with address-modal-close class
        addresscloseModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                addressOverlay.style.display = 'none';
                addressModal.style.display = 'none';
            });
        });





        // Variables Assigned for the shipping change button //
        const shippingModeAddressOverlay = document.getElementById('shipping-mode-address-mode-overlay');
        const shippingModal = document.querySelector('.shipping-modal');
        const shippingCloseModalButtons = document.querySelectorAll('.shipping-closeModal');
        const confirmModalButton = document.getElementById('shipping-mod-confirmModal');
        const showShipping = document.getElementById('showShipping');

        // Open modal when clicking on "Change" button
        showShipping.addEventListener('click', () => {
            shippingModeAddressOverlay.style.display = 'block';
            shippingModal.style.display = 'block';
        });

        // Close modal when clicking on any button with class .shipping-closeModal
        shippingCloseModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                shippingModeAddressOverlay.style.display = 'none';
                shippingModal.style.display = 'none';
            });
        });



        // Variables Assigned for the payment change button //
        const paymentMethodOverlay = document.getElementById('payment-method-overlay');
        const paymentMethodModal = document.querySelector('.payment-method-modal');
        const paymentMethodCloseModalButtons = document.querySelectorAll('.payment-method-closeModal');
        const paymentMethodConfirmModalButton = document.querySelector('.payment-method-modal-action-buttons .payment-method-modal-close-btn');
        const paymentMethodChangeButton = document.getElementById('showPayment'); 

        // Open modal when clicking on the "Change" button
        paymentMethodChangeButton.addEventListener('click', () => {
            paymentMethodOverlay.style.display = 'block';
            paymentMethodModal.style.display = 'block';
        });

        // Close modal when clicking on any button with class .payment-method-closeModal
        paymentMethodCloseModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                paymentMethodOverlay.style.display = 'none';
                paymentMethodModal.style.display = 'none';
            });
        });

        // Close modal when clicking on Confirm button
        paymentMethodConfirmModalButton.addEventListener('click', () => {
            paymentMethodOverlay.style.display = 'none';
            paymentMethodModal.style.display = 'none';
        });



    </script>
</body>
</html>
