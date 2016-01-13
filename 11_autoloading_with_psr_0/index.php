<?php

//Require psr-0 autoloader
require 'autoload.php';

//Set data and validation rules
$rules = array('email' => 'required|email','password|min:8');
$data = array('email' => 'joost@tutsplus.com','password' => '12346789','foo' => 'bar');

//Run validation
$validation = new Joostvanveen\App\Validator();
if ($validator->validate($data, $rules ) == true ){

    //Create a User in  the global namespace
    $joost = new Joostvanveen\App\User($data);
    var_dump($joost);

    //Create a User in the Library namespace
    $nick = new Joostvanveen\library\user();
    var_dump($nick);
}
else {

    //Validation failed. Dump validation errors
    var_dump($validator->getErrors());
}