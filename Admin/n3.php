<!-- Assuming this is your index.php file -->
<!DOCTYPE html>
<html>
<head>
    <title>Food Items</title>
    <!-- Your CSS and other meta tags -->
</head>
<body>
    <h1>Food Items</h1>

    <div class="food-items-container">
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
    <!-- Your other HTML content -->
</body>
</html>
