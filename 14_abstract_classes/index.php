<?php

// Require psr-0 autoloader
require 'autoload.php';
// Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12346789', 'foo' => 'bar');
// Run validation
$validator = new Acme\App\Validator();
if ($validator->validate($data, $rules) == true) {

    $member = new Acme\App\Member();
    echo $member->login();
//     $administrator = new Acme\App\Administrator();
//     echo $administrator->login();
}
else {

    // Validation failed. Dump validation errors.
    var_dump($validator->getErrors());
}