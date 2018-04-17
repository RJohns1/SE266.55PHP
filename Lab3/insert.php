<!doctype HTML>
<head>
    <title>Insert Corporation</title>
</head>
<body>
    <?php
    include './dbconnect.php';
    include './function.php';
        
    $results = '';
    if(isPostRequest()){
        $db = getDatabase();
        $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");
        
        $corp = filter_input(INPUT_POST, 'corp');
        $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
        $email = filter_input(INPUT_POST, 'email');
        $zipcode = filter_input(INPUT_POST, 'zipcode');
		$owner = filter_input(INPUT_POST, 'owner');
        $phone = filter_input(INPUT_POST, 'phone');
        $binds = array(
            ":corp" => $corp,
            ":incorp_dt" => $incorp_dt,
            ":email" => $email,
            ":zipcode" => $zipcode,
			":owner" => $owner,
			":phone" => $phone
        );
        
        if($stmt->execute($binds) && $stmt->rowCount() >0){
            $result = 'Data Added';
        }
    }
    ?>
    <h1><?php echo $results; ?></h1>
    
    <form method="post" action="#">
        Corp Name: <input type="text" value="" name="corp" /><br />
        Corp Date: <input type="text" value="" name="incorp_dt" /><br />
        Email: <input type="text" value="" name="email" /><br />
        Zipcode: <input type="text" value="" name="zipcode" /><br />
		Owner: <input type="text" value="" name="owner" /><br />
		Phone Number: <input type="text" value="" name="phone" /><br />
        <input type="submit" value="submit" />
    </form>
	<a href="viewall.php">View All</a>
    
</body>
</html>
