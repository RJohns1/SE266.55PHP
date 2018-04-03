<?php
function isPOstRequest(){
    return( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST');
}
?>

