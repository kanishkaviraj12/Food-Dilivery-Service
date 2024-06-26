<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <title> Food Delivery Services</title>
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
        <!-- <div class="sidebar-logout">
            <a href="#"><ion-icon name="log-out-outline"></ion-icon>Logout</a>
        </div> -->
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
                    <a class="user" href="login.php"><ion-icon name="person-outline"></ion-Icon>
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
                        <a href="checkout.html?selectedImage=images/seafood.jpg&foodName=See Food&foodDescription=Lorem ipsum dolor sit amet consectetur provident doloremque minima&foodPrice=Rs.152.00">
                        <img class="detail-img" src="images/seafood.jpg" alt="Image 1">
                        </a>

                        <div class="detail-desc">
                            <div class="detail-name">
                                <h4 id="foodName">See Food</h4>
                                <p class="detail-sub" id="foodDescription">Lorem ipsum dolor sit amet consectetur provident doloremque minima</p>
                                <p class="price" id="foodPrice">Rs.152.00</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="detail-card">
                        <a href="checkout.html?selectedImage=images/pizza.jpg&foodName=Pizza&foodDescription=Lorem ipsum dolor sit amet consectetur provident doloremque minima&foodPrice=Rs.200.00">
                        <img class="detail-img" src="images/pizza.jpg">
                        </a>
                        <div class="detail-desc">
                            <div class="detail-name">
                                <h4 id="foodName">Pizza</h4>
                                <p class="detail-sub" id="foodDescription">Lorem ipsum dolor sit amet consectetur provident doloremque minima</p>
                                <p class="price" id="foodPrice">Rs.200.00</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="detail-card">
                        <a href="checkout.html?selectedImage=images/Wine.jpg&foodName=Wine&foodDescription=Lorem ipsum dolor sit amet consectetur provident doloremque minima&foodPrice=Rs.300.00">
                            <img class="detail-img" src="images/wine.jpg">
                        </a>
                        <div class="detail-desc">
                            <div class="detail-name">
                                <h4 id="foodName">Wine</h4>
                                <p class="detail-sub" id="foodDescription">Lorem ipsum dolor sit amet consectetur provident doloremque minima</p>
                                <p class="price" id="foodPrice">Rs.300.00</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="detail-card">
                        <a href="checkout.html?selectedImage=images/burger.jpg&foodName=Burger&foodDescription=Lorem ipsum dolor sit amet consectetur provident doloremque minima&foodPrice=Rs.250.00">
                            <img class="detail-img" src="images/burger.jpg">
                        </a>
                        <div class="detail-desc">
                            <div class="detail-name">
                                <h4 id="foodName">Burger</h4>
                                <p class="detail-sub" id="foodDescription">Lorem ipsum dolor sit amet consectetur provident doloremque minima</p>
                                <p class="price" id="foodPrice">Rs.250.00</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="detail-card">
                        <a href="checkout.html?selectedImage=images/coffee.jpg&foodName=Coffee&foodDescription=Lorem ipsum dolor sit amet consectetur provident doloremque minima&foodPrice=Rs.350.00">
                            <img class="detail-img" src="images/coffee.jpg">
                        </a>
                        <div class="detail-desc">
                            <div class="detail-name">
                                <h4 id="foodName">Coffee</h4>
                                <p class="detail-sub" id="foodDescription">Lorem ipsum dolor sit amet consectetur provident doloremque minima</p>
                                <p class="price" id="foodPrice">Rs.350.00</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="detail-card">
                        <a href="checkout.html?selectedImage=images/salad.jpg&foodName=Salad&foodDescription=Lorem ipsum dolor sit amet consectetur provident doloremque minima&foodPrice=Rs.200.00">
                            <img class="detail-img" src="images/salad.jpg">
                        </a>
                        <div class="detail-desc">
                            <div class="detail-name">
                                <h4 id="foodName">Salad</h4>
                                <p class="detail-sub" id="foodDescription">Lorem ipsum dolor sit amet consectetur provident doloremque minima</p>
                                <p class="price" id="foodPrice">Rs.200.00</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                    </div>

                    <?php
                        // Establish a connection to your database (MySQL)
                        include('connection.php');
                        
                        // Fetch data from the database
                        $sql = "SELECT food_name, description, price, image_path FROM food_items";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                // Modify the image path to match the correct URL format
                                $imagePath = str_replace('../uploads/', 'uploads/', $row["image_path"]);

                                // Output HTML for each food item card using modified image path
                                echo '<div class="detail-card">';
                                echo '<a href="checkout.php?selectedImage=' . $imagePath . '&foodName=' . $row["food_name"] . '&foodDescription=' . $row["description"] . '&foodPrice=' . $row["price"] . '">';
                                echo '<img class="detail-img" src="' . $imagePath . '">';
                                echo '</a>';
                                echo '<div class="detail-desc">';
                                echo '<div class="detail-name">';
                                echo '<h4>' . $row["food_name"] . '</h4>';
                                echo '<p class="detail-sub">' . $row["description"] . '</p>';
                                echo '<p class="price">Rs.' . $row["price"] . '</p>';
                                echo '</div>';
                                echo '<ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "0 results";
                        }

                        // Close the connection
                        $conn->close();
                    ?>





                    







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
