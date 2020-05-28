<?php
include('config/db_connect.php');


if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($conn, $sql)) {
        //success
        header('Location: index.php');
    } {
        echo 'query error' . mysqli_error($conn);
    }
}




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


        <!-- delete form -->
        <form action="details.php" method="POST">

            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
            <input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
        </form>

    <?php else :  ?>

        <h5>No such pizza exists.</h5>

    <?php endif  ?>



</div>

<?php include('huttpizza/footer.php'); ?>

</html>