<!doctype HTML>
<head>
    <title>Insert Actors</title>
</head>
<body>
    <?php
    include './database.php';
    include './function.php';
        
    $results = '';
    if(isPostRequest()){
        $db = getDatabase();
        $stmt = $db->prepare("INSERT INTO actors SET firstname = :firstname, lastname = :lastname, dob = :dob, height = :height");
        
        $firstname = filter_input(INPUT_POST, 'firstname');
        $lastname = filter_input(INPUT_POST, 'lastname');
        $dob = filter_input(INPUT_POST, 'dob');
        $height = filter_input(INPUT_POST, 'height');
        $binds = array(
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":dob" => $dob,
            ":height" => $height
        );
        
        if($stmt->execute($binds) && $stmt->rowCount() >0){
            $result = 'Data Added';
        }
    }
    ?>
    <h1><?php echo $results; ?></h1>
    
    <form method="post" action="#">
        First Name: <input type="text" value="" name="firstname" /><br />
        Last Name: <input type="text" value="" name="lastname" /><br />
        Date of Birth: <input type="text" value="" name="dob" /><br />
        Height: <input type="text" value="" name="height" /><br />
        <input type="submit" value="submit" />
    </form>
    
</body>
</html>
