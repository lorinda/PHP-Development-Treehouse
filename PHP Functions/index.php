<?php

//Create a function name(){}

//passing by value

//passing by reference: value can change from function

/*function hello($name){
    echo "Hello, $name, how's it going!";
}

//Call the function
hello("Hampton");*/


function hello($arr = 'friends'){
    if(is_array($arr)){
        foreach($arr as $name){
            
            //<br> in echo for new line
            echo "Hello, $name. How's it going!<br>";
        }
    }else{
        echo "Hello, $arr, how's it going?";
    }
}

$names = array(
    'Bob',
    'Shelly');

//default argument
hello($names);

$current_user = "Mike";


function is_mike(){
    //global variable outside of function used in function
    global $current_user;
    if($current_user == 'Mike'){
        echo '<html>It is Mike </html>';
    }
    else{
        echo 'It is not Mike';
    }
}

is_mike();

?>