<?php
function isAccessible($object, $method){
    $check = new ReflectionMethod($object, $method);
    return $check->isPublic();
}

function is_valid_email($email)
{
    $regex = '/^\w+([.]\w+)*@\w+([.]\w+)+$/';
    if (preg_match($regex, $email) == 1) {
        return true;
    } else {
        return false;
    }
}

function is_valid_password($password)
{
    $regex = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';
    if (preg_match($regex, $password) == 1) {
        return true;
    } else {
        return false;
    }
}