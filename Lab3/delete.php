<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Corporation</title>
    </head>
    <body>
        <?php
        
            include './dbconnect.php';
            include './function.php';
            $db = getDatabase();
            
            $id = filter_input(INPUT_GET, 'id'); 
            
            $stmt = $db->prepare("DELETE FROM corps where id = :id");
            
            $binds = array(
                ":id" => $id
            );
       
        $isDeleted = false;
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $isDeleted = true;
        }       
        
        ?>
        ID: <input type="text" value="" name="id" /><br />
		<input type="submit" value="submit" />
        
        <h1> Data <?php echo $id; ?>
         <?php if ( !$isDeleted ): ?> 
          Not
        <?php endif; ?>
        Deleted</h1>
        
        <a href="viewall.php">View All</a>
        
        
        
    </body>
</html>