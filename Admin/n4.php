<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Food Delivery Services</title>
</head>
<body>

    <!-- Sidebar -->
    <!-- ... (Sidebar content) ... -->

    <!-- Main -->
    <div class="main">
        <!-- Main Navbar -->
        <!-- ... (Main navbar content) ... -->

        <!-- Main Highlight -->
        <!-- ... (Main highlight content) ... -->

        <!-- Main Menus / Content -->
        <div class="main-menus">
            <!-- Filter Section -->
            <!-- ... (Filter section content) ... -->

            <hr class="divider">

            <!-- List of the Food Menu (Dynamically fetched content) -->
            <div class="main-detail">
                <h2 class="main-title">Choose Order</h2>
                <div class="detail-wrapper">
                    <?php
                        // Establish a connection to your database (MySQL)
                        include('../connection.php');
                        
                        // Fetch data from the database
                        $sql = "SELECT food_name, description, price, image_path FROM food_items";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                // Output HTML for each food item card using fetched data
                                echo '<div class="detail-card">';
                                echo '<a href="checkout.html?selectedImage=' . $row["image_path"] . '&foodName=' . $row["food_name"] . '&foodDescription=' . $row["description"] . '&foodPrice=' . $row["price"] . '">';
                                echo '<img class="detail-img" src="' . $row["image_path"] . '">';
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

    <!-- Include necessary scripts -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="app.js"></script>

</body>
</html>
