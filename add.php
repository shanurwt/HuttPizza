<?php

// if (isset($_GET['submit'])) {
//     echo $_GET['email'] . "<br>";
//     echo $_GET['name'] . "<br>";
//     echo $_GET['ingredients'] . "<br>";
// }

include('config/db_connect.php');



$email = $name = $ingredients = '';


$errors = array('email' => '', 'name' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {


    // echo htmlspecialchars($_POST['email']) . "<br>";                // htmlspecialchars is used to defend site from xss attack.
    // echo htmlspecialchars($_POST['name']) . "<br>";
    // echo htmlspecialchars($_POST['ingredients']) . "<br>";


    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is empty <br>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] =  'Email must be a valid email address <br>';
        }
    }


    if (empty($_POST['name'])) {
        $errors['name'] = 'Name is empty <br>';
    } else {
        $name = $_POST['name'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {                        // regex for name
            $errors['name'] = 'Title must be letters and spaces <br>';
        }
    }


    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] =  'Ingredients is empty <br>';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients musrt be a comma separated list. <br>';
        }
    }

    if (array_filter($errors)) {
        // echo 'Error in form';
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        $sql = "INSERT INTO pizzas(email,name,ingredients) VALUES('$email', '$name', '$ingredients')";      // save to db and check

        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        } else {
            echo 'query error:' . mysqli_error($conn);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include('huttpizza/header.php');  ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" class="white" method="POST">

        <label>Your Email:</label>
        <input type="text" name="email" value="<?php htmlspecialchars($email);  ?>   ">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Your Name</label>
        <input type="text" name="name" <?php htmlspecialchars($name);  ?>>
        <div class="red-text"><?php echo $errors['name'] ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" <?php echo htmlspecialchars($ingredients);  ?>>
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

        </div>

    </form>

</section>

<?php include('huttpizza/footer.php')    ?>



</html>