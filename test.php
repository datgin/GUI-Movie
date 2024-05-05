<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- HTML form for rating -->
    <form action="submit_rating.php" method="post">
        <input type="hidden" name="product_id" value="1">
        <input type="radio" name="rating" value="1"><i class="fa fa-star"></i>
        <input type="radio" name="rating" value="2"><i class="fa fa-star"></i>
        <input type="radio" name="rating" value="3"><i class="fa fa-star"></i>
        <input type="radio" name="rating" value="4"><i class="fa fa-star"></i>
        <input type="radio" name="rating" value="5"><i class="fa fa-star"></i>
        <input type="submit" value="Submit">
    </form>

    <!-- PHP code to insert rating into database -->
    <?php
    // Connect to the database using PDO
    // $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');

    // // Prepare the SQL statement to insert the rating
    // $stmt = $pdo->prepare('INSERT INTO ratings (product_id, user_id, rating) VALUES (:product_id, :user_id, :rating)');

    // // Bind the parameters to the prepared statement
    // $stmt->bindParam(':product_id', $_POST['product_id']);
    // $stmt->bindParam(':user_id', $_SESSION['user_id']);
    // $stmt->bindParam(':rating', $_POST['rating']);

    // // Execute the prepared statement to insert the rating
    // $stmt->execute();

    // // Calculate the average rating for the product
    // $sql = 'SELECT AVG(rating) AS average_rating FROM ratings WHERE product_id = :product_id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(':product_id', $_POST['product_id']);
    // $stmt->execute();
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // // Display the average rating
    // echo 'Average rating: ' . round($result['average_rating'], 1);
    ?>
</body>

</html>