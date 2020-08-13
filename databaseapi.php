<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', '');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}


?>

<html>
<body>
    <div>
        <h1>This is an example</h1>
        <label for="databases">Choose a Car:</label>

        <select name="cars" id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>

    <div>
        <h1>Create a connection with the database that will allow you to view all databases, add a database (extra : delete a database)</h1>
        <label for="databases">Choose a Database:</label>

        <select name="database" id="database">
            <?php
            $sql = 'SHOW DATABASES';
            if ($result = $mysqli -> query($sql)) {
                while ($row = $result -> fetch_row()) {
                    ?>
                        <option value="'<?php echo $row[0] ?>'"><?php echo $row[0] ?></option>
                    <?php
                }
                $result -> free_result();
            } 
            ?>
        </select>
    </div>
</body>
</html>