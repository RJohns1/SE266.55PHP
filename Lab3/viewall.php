<!DOCTYPE HTML>
<html>
    <head>
        <title>Viewall Corporation</title>
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './function.php';

        $db = getDatabase();
        
        $id = filter_input(INPUT_GET, 'id'); 

        $stmt = $db->prepare("SELECT * From corps");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <table>
            <thread>
                <tr>
                    <th>Corp</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?php echo $row['corp'] ?></td>
                        <td><a href="read.php">Read</a></td>
                        <td><a href="update.php">Update</a></td>
                        <td><a href="delete.php">Delete</a></td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>
    </body>
</html>