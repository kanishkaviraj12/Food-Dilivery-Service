<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <title> Food Delivery Services</title>
    <script src="imagesDirectPage.js"></script>

    <style>
        /* Styles for the checkout form container */
        #checkoutForm {
            max-width: 400px;
            margin: 0 auto;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Styles for form labels */
        #actualCheckoutForm label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        /* Styles for form input fields */
        #actualCheckoutForm input[type="text"],
        #actualCheckoutForm input[type="email"],
        #actualCheckoutForm input[type="tel"],
        #actualCheckoutForm select {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Styles for the checkbox and its label */
        #actualCheckoutForm .payment-methods {
            margin-top: 15px;
        }

        /* Styles for the submit button */
        #actualCheckoutForm button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #actualCheckoutForm button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Additional styles for form elements */
        #actualCheckoutForm #saveCard {
            margin-right: 5px;
        }
    </style>

    <script>
            function showMessage(message) {
                alert(message); // This creates an alert pop-up with the given message
            }
    </script>
  
</head>
<body>

    <!-- sidebar -->
    <div class="sidebar">
        <!-- Logo -->
        <h1 class="logo">FoodTime</h1>

        <!-- List of menus -->
        <div class="sidebar-menus">
            <a href="#"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <a href="#"><ion-icon name="receipt-outline"></ion-icon>Bills</a>
            <a href="#"><ion-icon name="wallet-outline"></ion-icon>Wallet</a>
            <a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a>
            <a href="#"><ion-icon name="chatbubbles-outline"></ion-icon>Contact Us</a>
            <a href="#"><ion-icon name="settings-outline"></ion-icon>Setting</a>
        </div>

        <!-- Logout -->
        <div class="sidebar-logout">
            <a href="#"><ion-icon name="log-out-outline"></ion-icon>Logout</a>
        </div>
    </div>

    <!-- Main -->
    <div class="main">
        <!--Main navbar-->
        <div class="main-navbar">
            <!-- menu when appear on mobile version-->
            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
                <!-- search bar-->
                <div class="search">
                    <input type="text" placeholder="What you want to eat?">
                    <button class="search-btn">Search</button>
                </div>
            <!-- profile icon on left side of the navbar-->
            <div class="profile">
                    <a class="cart" href="#"><ion-icon name="cart-outline"></ion-Icon></a>
                    <a class="user" href="#"><ion-icon name="person-outline"></ion-Icon>
                </a>
            </div>
        </div>

        <!--main highlight -->
        <div class="main-highlight">
            <!-- title selection and arrow -->
            <div class="main-header">
              <h2 class="main-title">Recommendations</h2>
              <div class="main-arrow">
                <ion-icon class="back" name="chevron-back-circle-outline"></ion-icon>
                <ion-icon class="next" name="chevron-forward-circle-outline"></ion-icon>
              </div>
            </div>
            <!-- hightlight menu-->
            <div class="highlight-wrapper">

                <div class="highlight-card">
                    <img class="highlight-img" src="images/salad.jpg">
                    <div class="highlight-desc">
                        <h4>Fresh Salad</h4>
                        <p>Rs.42.50</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <img class="highlight-img" src="images/coffee.jpg">
                    <div class="highlight-desc">
                        <h4>Cafe Latte</h4>
                        <p>Rs.50.34</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <img class="highlight-img" src="images/steak.jpg">
                    <div class="highlight-desc">
                        <h4>Premium Steak</h4>
                        <p>Rs.200.52</p>
                    </div>
                </div>

                <div class="highlight-card">
                    <img class="highlight-img" src="images/burger.jpg">
                    <div class="highlight-desc">
                        <h4>Big Burger</h4>
                        <p>Rs.75.32</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- main menus / contend--> 
        <div class="main-menus">
            <!--filter section -->
            <div class="main-filter">
                <div>
                    <h2 class="main-title">Menu<br>Category</h2>
                    <div class="main-arrow">
                        <ion-icon class="back-menus" name="chevron-back-circle-outline"></ion-icon>
                        <ion-icon class="next-menus" name="chevron-forward-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="filter-wrapper">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="restaurant-outline"></ion-icon>
                        </div>
                        <p>All Menus</p>
                    </div>

                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="fast-food-outline"></ion-icon>
                        </div>
                        <p>Burger</p>
                    </div>

                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="pizza-outline"></ion-icon>
                        </div>
                        <p>Pizza</p>
                    </div>

                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="wine-outline"></ion-icon>
                        </div>
                        <p>Wine</p>
                    </div>

                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="ice-cream-outline"></ion-icon>
                        </div>
                        <p>Ice Cream</p>
                    </div>

                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="cafe-outline"></ion-icon>
                        </div>
                        <p>Coffee</p>
                    </div>

                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="fish-outline"></ion-icon>
                        </div>
                        <p>Sea Food</p>
                    </div>

                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon name="nutrition-outline"></ion-icon>
                        </div>
                        <p>Healthy</p>
                    </div>

                </div>
           
            </div>
            <hr class="divider">
            <!-- List of the food menu -->
            <div class="main-detail">
                <h2 class="main-title">Choose Order</h2>
                <div class="detail-wrapper"> 
                    <div class="detail-card">
                        <img class="detail-img" src="">
                        <div class="detail-desc">
                            <div class="detail-name">
                                <h4 id="foodName">Pizza</h4>
                                <p class="detail-sub" id="foodDescription">Lorem ipsum dolor sit amet consectetur provident doloremque minima</p>
                                <p class="price" id="foodPrice">Rs.</p>
                            
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                        <div id="checkoutForm" style="display: none;" class="detail-desc">
                            <!-- Add your checkout form fields here -->
                            <form id="actualCheckoutForm" action="" method="POST">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" required><br>
                            
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required><br>
                            
                                    <label for="phone">Phone:</label>
                                    <input type="tel" id="phone" name="phone" required><br>
                            
                                    <label for="address">Address:</label>
                                    <textarea id="address" name="address" rows="5" cols="40"></textarea><br>
                            
                                    <label for="payment">Payment Method:</label>
                                    <select id="payment" name="payment" required>
                                        <option value="credit">Credit Card</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                    <div class="payment-methods">
                                        <input type="checkbox" id="saveCard" name="saveCard">
                                        <label for="saveCard">Save card for future purchases</label>
                                    </div>
                                <button type="submit">Checkout</button>
                            </form>
                        </div>

                        <?php
                            include('connection.php');
                            // Check if the form is submitted
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Retrieve form data
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $address = $_POST['address'];
                                $payment = $_POST['payment'];
                                $saveCard = isset($_POST['saveCard']) ? 1 : 0; // If saveCard is checked, set to 1, else 0

                                // Prepare and execute SQL statement to insert data
                                $sql = "INSERT INTO checkout (name, email, phoneNB, address, paymentMethod,save_card ) VALUES ('$name', '$email', '$phone', '$address', '$payment','$saveCard')";
                                

                                if (mysqli_query($conn, $sql)) {
                                    echo '<script>showMessage("Your order was successfully");</script>';
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                                
                            } 
                                                        
                            else {
                                echo "Form submission error";
                            }
                            $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="app.js"></script>

</html>
