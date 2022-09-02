<!-- <?php

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];
$submit = $_POST['submit'];

?> -->


<?php

if(  ( $_POST("user_name") != "" && $_POST("user_email") && $_POST("user_phone") && $_POST("user_message"))   && (isset($_POST("submit"))  )      ) {

    echo "Correct";

}
else {
    echo "please fill all field";
}
?>