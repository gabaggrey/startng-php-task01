
<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];

    $txt = "\n";

    $file = fopen($name.".txt", "a");

    fwrite($file, $name);
    
    fwrite($file, $txt);

    fwrite($file, $email);

    fwrite($file, $txt);

    fwrite($file, $age);

    fwrite($file, $txt);

    fwrite($file, $city);


    fclose($file);

    echo "Submitted successfully!";
}

?>