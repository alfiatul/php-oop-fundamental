<?php

// Require app files
require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

//Set data and validation rules
$rules = array('email' => 'required|email','password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12346789', 'foo' => 'bar');

// Run validation
$validator = new validator();
if ($validator->validate($data, $rules) == true) {

    //Validation passed. Set user values.
    $joost = new User($data);

    $joost->email = 'sometheremail@tutsplus.com';
    $joost->password = 'sadfsadfsad';

    //var_dump($joost->email);
    //var_dump($joost->password);

    //Dump user
    // var_dump($joost);

    echo $joost;
}
else {
    // Validation failed. Dump validation errors.
    var_dump($validator->getErrors());
}