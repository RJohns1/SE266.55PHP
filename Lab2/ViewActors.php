<!DOCTYPE HTML>
<html>
    <head>
        <title>View Actors</title>
    </head>
    <body>
        <?php
        include './database.php';
        include './function.php';
        
        $db = getDatabase();
        
        $stmt = $db->prepare("SELECT * From actors");
        
        $results = array();
        if($stmt->execute() && $stmt->rowCount() > 0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
       
        ?>
        
        <table>
            <thread>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Height</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row['lastname']?></td>
                    <td><?php echo $row['dob']?></td>
                    <td><?php echo $row['height']?></td>
                </tr>
                <?php endforeach; ?>
                
              
            </tbody>
        </table>
    </body>
</html>