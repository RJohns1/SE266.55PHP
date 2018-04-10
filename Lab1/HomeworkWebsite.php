<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
        src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Finished Lab Work</title>
</head>
<body>
    Name: Ryan Johns<br>
    <a href="https://github.com/RJohns1/SE266.55PHP">Github repo</a><br>
    Resources to help with php<br>
    <ul>
        <li><a href="http://php.net/manual/en/">php.net</a></li>
        <li><a href="https://stackoverflow.com">stackoverflow.com</a></li>
        <li><a href="https://www.w3schools.com/php">w3schools.com</a></li>
    </ul>
    <?php
    $file = "HomeworkWebsite.php";
    $mod_date = date("F d Y h:i:s A", filemtime($file));

    echo "Last modified $mod_date<br>";
    ?>
    <br>
    Lab 1: Credit Card <a href="http://ict.neit.edu/001379358/public_html/PHP/Lab1/Lab1.php" class="btn btn-primary">View</a> <a href="http://ict.neit.edu/001379358/public_html/PHP/Lab1.zip" class="btn btn-warning">Code</a><br>
    Lab 2: Actors <a href="http://ict.neit.edu/001379358/public_html/PHP/Lab2.zip" class="btn btn-warning">Code</a><br>
    Lab 3: Corporation<button>View</button><button>Code</button><br>
    Lab 4: ???<button>View</button><button>Code</button><br>
    Lab 5: ???<button>View</button><button>Code</button><br>
    Lab 6: ???<button>View</button><button>Code</button><br>
</body>

