<html>
    <body>
        <h1>PHP Filter Extension</h1>
        <table>
            <tr>
                <th>Filter Name</th>
                <th>Filter ID</th>
            </tr>
        <?php
        // List all PHP Filter extension
        foreach (filter_list() as $id => $filter) {
            echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></tr>";
        }
        ?>
        <hr>
        <h2>Sanitize a string</h2>
        <?php
            $str = "<h1>Hello World!</h1>";
            $newStr = filter_var($str, FILTER_SANITIZE_STRING);
            echo $newStr;
        ?>
        <hr>
        <h2>Sanitize an Int</h2>
        <?php
        $int = 100;
        if(!filter_var($int, FILTER_VALIDATE_INT) === false){
            echo "Integer is valid";
        } else {
            echo "Integer is not valid";
        }
        ?>
        <hr>
    </body>
</html>


