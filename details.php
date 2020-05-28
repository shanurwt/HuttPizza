<?php
include('config/db_connect.php');

//check get req id from parameter
if (isset($_GET['id'])) {


    $id = mysqli_real_escape_string($conn, $_GET['id']);


    //make a sql

    $sql = "SELECT * FROM pizzas WHERE id = $id";

    //getting query result
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}



?>

<html>

<?php include('huttpizza/header.php'); ?>

<div class="container center">

    <?php if ($pizza) :  ?>

        <h4> <?php echo htmlspecialchars($pizza['email']);  ?> </h4>
        <p> Created By: <?php echo htmlspecialchars($pizza['name']);  ?> </p>
        <p> Created at: <?php echo date($pizza['created_at']);  ?> </p>
        <h5>Ingredients:</h5>
        <p> Created By: <?php echo htmlspecialchars($pizza['ingredients']);  ?> </p>


    <?php else :  ?>

        <h5>No such pizza exists.</h5>

    <?php endif  ?>



</div>

<?php include('huttpizza/footer.php'); ?>

</html>