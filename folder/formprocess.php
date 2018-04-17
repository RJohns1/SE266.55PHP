<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>My Forms</h1>
        <?php
       
        
        $action = filter_input(INPUT_POST, 'action');
        
        if ( $action === 'asc' ) {
            $order = 'ASC';
        }
        if ( $action === 'desc' ) {
            $order = 'DESC';
        }
        if ( $action === 'Corporation' ) {
            $column = 'corp';
        }
        if ( $action === 'Email' ) {
            $column = 'email';
        }
        if ( $action === 'Zipcode' ) {
            $column = 'zipcode';
        }
        if ( $action === 'Owner' ) {
            $column = 'owner';
        }
        if ( $action === 'Phone' ) {
            $column = 'phone';
        }
        
        if ( $action === 'Submit2' ) {
            echo 'submited form 2';
        }
        
        include './form1.php';
        include './form2.php';
        
        ?>
    </body>
</html>