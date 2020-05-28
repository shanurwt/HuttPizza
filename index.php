<?php

include('config/db_connect.php');



$sql = 'SELECT id, name, ingredients FROM pizzas ORDER BY created_at';                          //write query for all pizza


$result = mysqli_query($conn, $sql);                                        // make query and get result



$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);                          // fetch the resulting rows as array;


mysqli_free_result($result);                                                //it will free the result

mysqli_close($conn);                                                        //closes the connection in database


// print_r($pizzas);                                                           //showing result in associative array


explode(',', $pizzas[0]['ingredients']);                                    // separate the elements from ingredients on basis of ','       

?>


<!DOCTYPE html>
<html lang="en">

<?php include('huttpizza/header.php'); ?>

<h4 class="center grey-text">Pizzas!</h4>
<div class="container">

    <div class="row">

        <?php foreach ($pizzas as $pizza) : ?>
            <!--//instead of { we are using : so that we don't get confuse -->

            <div class="col s6 md3">
                <div class="card z-depth-0">

                    <img src="img/Pizza.png" class="pizza">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['name']);              ?></h6>

                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients'])  as $ingre) :     ?>
                                <!-- instead of { we are using : so that we don't get confuse -->
                                <li> <?php echo htmlspecialchars($ingre); ?></li>
                            <?php endforeach; ?>

                        </ul>

                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">More Info</a>
                    </div>
                </div>
            </div>

        <?php endforeach;   ?>


    </div>

</div>

<?php include('huttpizza/footer.php');    ?>


</html>