<?php
// Connect to the database
$conn = mysqli_connect("localhost", "user", "password", "database");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the products from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Check if there are any products
if (mysqli_num_rows($result) > 0) {
    // Loop through the products and display them
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " Name: " . $row["name"] . " Price: " . $row["price"] . "<br>";
    }
} else {
    echo "No products found.";
}

// Close the connection
mysqli_close($conn);
?>
