<!DOCTYPE HTML>
<html>
    <head>
        <title>Read Corporations</title>
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './function.php';
        
        $db = getDatabase();
        
        $stmt = $db->prepare("SELECT * From corps");
        
        $results = array();
        if($stmt->execute() && $stmt->rowCount() > 0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
       
        ?>
        
        <table>
            <thread>
                <tr>
                    <th>Corp</th>
					<th>Corp Date</th>
					<th>Email</th>
					<th>Zipcode</th>
					<th>Owner</th>
					<th>Phone</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['corp']?></td>
					<td><?php echo $row['incorp_dt']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['zipcode']?></td>
					<td><?php echo $row['owner']?></td>
					<td><?php echo $row['phone']?></td>
                </tr>
                <?php endforeach; ?>
                
              
            </tbody>
        </table>
    </body>
</html>