<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './function.php';

        $db = getDatabase();

        $results = array();
        ?>
        
        <form action="#" method="post">
    <fieldset>
        <legend>Form 1</legend>
        
        <label>Ascending</label>
        <input type="radio" name="action" value="asc" /><br />
        
        <label>Descending</label>  
        <input type="radio" name="action" value="desc" />
        
        <select name="action">
            <option value="Corporation">Corporation</option>
            <option value="bread">Email</option>
            <option value="bread">Zipcode</option>
            <option value="bread">Owner</option>
            <option value="bread">Phone</option>
        </select>
        <input type="submit" value="Sort" />
    </fieldset>    
</form>


    </body>
</html>