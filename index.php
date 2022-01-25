<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Connecting Sql -->
    <?php 
        // Connect sql
        // 1: host
        // 2: login 
        // 3: password 
        // 4: database name 
        $mysql = new mysqli("localhost", "root", "", "php admin");
        
        // test errors 
        if($mysql->connect_error)
        {
            echo "Error Number: ".$mysql->connect_errno."<br>";
            echo "Error: ".$mysql->connect_erroe."<br>";
        }
        else
        {
            // set utf 8 
            $mysql->query("SET NAMES 'utf8'");
        }
        // close 
        // $mysql->close();
    ?>

    <!-- SQL queris -->
    <?php 
        // jnjel table - e 
        // $mysql->query("DROP TABLE EXAMPLE");

        // sarql table 
        // $mysql->query("CREATE TABLE example
        // (
        //     id INT AUTO_INCREMENT PRIMARY KEY,
        //     surname VARCHAR(255) NOT NULL
        // )");

        // avelavnel table i mej inch vor ban 
        // $mysql->query("INSERT INTO example (surname) VALUES('Vaghinak')");

        // Update 
        // $mysql->query("UPDATE `example` SET `surname` = 'New s' WHERE `id` = '1'");
        // $mysql->query("UPDATE `example` SET `surname` = 'less than 10' WHERE `id` < '11'");
        // $mysql->query("UPDATE `example` SET `surname` = 'is not 5' WHERE `id` <> '5'");

        // Delate
        // $mysql->query("DELETE FROM `example` WHERE `id` = 1 OR `id` = 10");

        // get results 
        $result = $mysql->query("SELECT * FROM `example` ORDER BY `id` DESC LIMIT 5, 20");
        
        // get result row count 
        echo $result->num_rows;

        // get result first element 
        print_r($result->fetch_assoc());

        // get all elements 
        while($row = $result->fetch_assoc())
        {
           echo $row["id"]."<br>";
        }
        
        $mysql->close();
    ?>
</body>
</html>