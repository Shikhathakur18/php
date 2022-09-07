<?php
function title_validation($title) {
global $error;
    
        if(empty($title)) {
            $error['title']="Title Required";
            
        }
        
}

function desc_validation($description) {
    global $error;
    
    if(empty($description)) {
        $error['description']="Description Required";
    }
}
?>
