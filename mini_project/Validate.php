<?php
function fname_validation($fname) {
global $error;
    
        if(empty($fname)) {
            $error['fname']="Name Required";
            
        }
        $uppercase = preg_match('@[A-Z]@', $fname);

        if(!$uppercase) {
            $error['fname']="First letter should be capital";
        }

        return $error;
}
function lname_validation($lname) {
global $error;
        
        if(empty($lname)) {
            $error['lname']="Last Name Required";
                
        }
        return $error;
}

function email_validation($email) {
global $error;

    if(empty($email)) {
        $error['email']="Email Required";
        
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error['email'] = "Invalid email format";
             
    }
    return $error;
}

function password_validation($password) {
    global $error;

    if(empty($password)) {

        $error['pass']="Password Required";
    }

    $uppercase = preg_match('@[A-Z]@', $password);
     $lowercase = preg_match('@[a-z]@', $password);
     $number    = preg_match('@[0-9]@', $password);
     $specialChars = preg_match('@[^\w]@', $password);
    
     if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password)<8) {
        $error['pass']="enter 1 Uppercase,lowercase,numbers,special chars";
    }
return $error;
}
?>
