<?php

//  $tribe = 'wakanda';
//  $tribe = 'wakandaForever';
// echo $tribe;                                           //print statement
// $tribeNumber = '"forever"';                           // string

// define('NAME', 'CONSTANT_SHIV');                     // This is constant in php
//  echo "shiv is  . $tribeNumber ";                    //concatenation of 2 string
//  echo $tribe[2];                                     // getting values of string from its index value;
// echo strlen($tribe);                                 // gives no of elements in string
//  echo strtolower($tribe);                            // strtolower to lower every characters in string    same strtoupper to uppercase every character
//  echo str_replace('a', 'e', $tribe);                     //to replace the string characters 

// $len = 1.2;                                                 //foat
// $bre = 6;                                                   //integer
// echo $len ** $bre;                                           // ** symbol is for power of or ^

// echo floor($len);                                           //gives floor value
// echo ceil($len);                                             //gives ceiling value
// echo pi();                                               //gives value of pi

// $yupArray = ['ayush', 'rawat', 'is', 'youtuber'];               //indexed array

//     $newForm = array('ayush', 'rawat', 'is', 'developer');          //another form of indexex array
//     $newForm[3] = 'student';                                        //changing a particular index
//     $newForm[] = 'of';                                   // adding a element in last of array

//  array_push($newForm , 'Enginnering');                      // pushing an element at last of array

// // print_r($newForm);                                                // print readable  (Array name)     gives a readable array

// echo count($newForm);                                               // gives count of no. of elements in array


// $merges = array_merge($newForm, $yupArray);

// print_r($merges);



// $one = ['lol' => 'laugh', 'wtf' => 'really', 'gn' => 'soja'];           // associative array :- in this we can change index value

// $two = array('ik' => 'bilkul', 'ikr' => 'haanji', 'gm' => 'awww');         // another method of associative array

// $one['lol'] = 'maja nhi aaya';                                              // changing values in this array

// // print_r($one);                                                           // print the human readable array form

// $three = array_merge($one,$two);                                                //merging array in new array

// print_r($three);    


// $youtube = [

// ['video1',35,'lorem'],                                                   //Multidimensional indexed Array
// ['video2',66,'ninja'],
// ['video3',35,'yup']

// ];

// print_r($youtube[0][1]);                                                // Printing a multidimensional array


// $youtube = [

//     ['number'=>'video1','likes'=>35,'title'=>'lorem'],                  //Multidimensional associative array
//     ['number'=>'video2','likes'=>66,'title'=>'ninja']

//     ];

// // print_r($youtube[0]['number']);                                     //   printing multidimensional associative array
// // echo $youtube[0]['number'];
// // echo count($youtube[0]);
// // print_r($youtube);

// array_push($youtube, 'subscribers');                            //pushing elements in array
// $you = array_pop($youtube);
// print_r($you);


// $yes = ['ayush ', 'rawat ', 'is ', 'a ', 'blogger', '.'];

// for($i = 0; $i<count($yes); $i++)                //for loop in php
// {
//     echo $yes[$i] . '<br />' ;                   //using br for line break
// }

// foreach($yes as $i){                             // foreach loop in php, same as for loop
//     echo $i . '<br>';
// }



// $youtube = [

//     ['number'=>'video1','likes'=>36,'title'=>'lorem'],
//     ['number'=>'video2','likes'=>66,'title'=>'ninja'],
//     ['number'=>'video3','likes'=>20,'title'=>'fire'],
//     ['number'=>'video4','likes'=>16,'title'=>'water'],
//     ['number'=>'video5','likes'=>43,'title'=>'livestream'],
//     ['number'=>'video6','likes'=>34,'title'=>'donate']
//     ];

// foreach ($youtube as $i) {                                               //foreach loop in  associative array
//     echo $i['number'] . '--' . $i['likes'] . '<br>';
// }


// $i =0;

// while($i<count($youtube)){                                               // while loop in php,, naice
//     echo $youtube[$i]['number'] . '<br>';
//     $i++;
// }



// echo 'lol' == 'lal';                           // lol is not equal to lal so it is false an we will get nothing
// echo 'ayush' < 'rawat';                     // the first letter of each word has to be compared... in this a<r is true so output will be 1
// echo 'ayush' < 'Ayush';                         // the upper case letter are less than small case letter so this condition is false
//  echo 69 == '69';                                  // this will be true because both are 69. and this is lose comparision.

// echo 69 === '69';                               //this will return false because triple assignment also check the datatype, this is strict comparision


// echo true == "1";                       // this is actual value of true (1)
// echo false == "";                       // this is actual value of false (null or nothing)



// foreach($youtube as $streak){


// if($streak['title']=='fire'){          
// continue;                                   // continue will not take the element if condition is true.
// }

// if($streak['title']=='ninja'){
//     continue;                                //continue will not take the element if condition is true.
//     }


//     if($streak['likes']==43){
//     break;                                   // break will break the loop.

//     }

// echo $streak['title']. '</br>';
// }

// function comment($name,$likes){                        // function with two parameter as name and likes or we can select name here also like $name = 'ayush' and $likes = 13;

//         echo "Thanks $name" . " for $likes " . "Likes";
// }
// // comment();  
// comment('Chandan and Garima', 2);                  //parmeter are passed as string and number


// function status($youtube){
//     // echo " {$youtube['number']} gets {$youtube['likes']} Likes. ";        //it will echo the string and array elements can be used like this in { $parameter_name[index] }
//     return " {$youtube['number']} gets {$youtube['likes']} Likes. ";        // returns the string in new 
// }
// $new = status(['number'=>'video1' , 'likes' => 23]);                    // passing an array in function status and storing it in variable new
// echo $new;                                                      // echo that new variable


// function anna(){
//     $biscuit = 'Dark_fantasy';                      //local variable
//     echo "I have a pack of $biscuit.";              // can be used inside.
// }
// anna(); 
// echo $biscuit;                                      //cannot be used outside of function because of its scope.





// $biscuit = 'sunfeast';                                  //globally defined variable

// function anna(){                  
//     echo "I have a pack of $biscuit.  <br>";             // global variables can be used inside a funtion,, if same variable is assigned inside function then precedence is of local variable.
// }
// anna(); 
// echo $biscuit;                                           // it can be used outside also.


// $biscuit = 'sunfeast';                                  //globally defined variable

// function anna(){ 

//    global $biscuit;                         // this is how to use global variables inside a function by using global. By using global we can change value iniside a function also.
//     echo "I have a pack of $biscuit.  <br>";             // global variables can be used inside a funtion,, if same variable is assigned inside function then precedence is of local variable.
// }
// anna(); 


// include('second.php');                // continue the code if file doesn't exist
// require('second.php');                   // breaks or stop the code if file doesn't exist
// echo 'LOL'. "<br>";


// for($i=0; $i<count($again); $i++){
//     echo $again[$i] . "<br/>";              // getting values from index.php
//     }






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <!-- <?php

            $i = 0;
            while ($i < count($youtube)) {  ?>
    
        <h3> Video Number:- <?php echo $youtube[$i]['number']; ?>  </h3>
        <p> Likes <?php echo $youtube[$i]['likes']; ?>  </p>
    <?php $i++;
            } ?>  -->

    <!-- <?php
            foreach ($youtube as $checking) {
                if ($checking['likes'] > 30) {
            ?>   

        <li>    <?php echo $checking['likes'] ?>        </li>

    <?php
                }
            }


    ?>

 -->

</body>

</html>