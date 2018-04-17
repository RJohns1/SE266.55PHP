<?php
include './main.php';

$action = filter_input(INPUT_POST, 'action');

$db = getDatabase();

if ($action === 'asc') {
    $order = 'ASC';
}
if ($action === 'desc') {
    $order = 'DESC';
}
if ($action === 'Corporation') {
    $column = 'corp';
}
if ($action === 'Email') {
    $column = 'email';
}
if ($action === 'Zipcode') {
    $column = 'zipcode';
}
if ($action === 'Owner') {
    $column = 'owner';
}
if ($action === 'Phone') {
    $column = 'phone';
}

$stmt = $db->prepare("SELECT * FROM corps ORDER BY $column $order");

if ($stmt->execute() && $stmt->rowCount() > 0) {
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if ($action === 'Phone') {
echo <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Corporation Name</th>
            <th>Date</th>
            <th>Email</th>
            <th>Zipcode</th>
            <th>Owner</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['corp']; ?></td>
                <td><?php echo $row['incorp_dt']; ?></td> 
                <td><?php echo $row['email']; ?></td> 
                <td><?php echo $row['zipcode']; ?></td> 
                <td><?php echo $row['owner']; ?></td> 
                <td><?php echo $row['phone']; ?></td> 
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
}
?>

