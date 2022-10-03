<!DOCTYPE html>
<html>
    <head>
        <title>Family Insurance Plans</title>
        <link href="../css/insurance.css" type="text/css" rel="stylesheet">
        <link href="../css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
    <div class = "table-container">
        
            <button class="close" onclick='goBack()'><i class="fa fa-window-close fa-2x"></i></button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        
        <h1>Family Insurance Plans</h1>
        <?php select_insurance(); ?>
        
    </div>
<?php
function select_insurance() {
    include "config.php";
    $sql = "SELECT ins_name, ins_value, min_time, max_time, description
            FROM insurance_plan
            WHERE  ins_type = 'family';";
    $result = $conn->query($sql);

    if($result -> num_rows > 0) {
        echo "<table border=1px;>";
        echo "<tr>";
        echo "<th>Insurance Name</th>";
        echo "<th>Value</th>";
        echo "<th>Time Period</th>";
        echo "<th>Description</th>";
        while($row =  $result -> fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ins_name"] . "</td>" . "<td>". $row["ins_value"] . "</td>" . "<td>" . $row["min_time"] . ' - ' . $row["max_time"] . "</td>" . "<td>" . $row["description"] . "</td>";
            echo "</tr>";
        }
    }
    else {
        echo "<h2>Still updating the data. Sorry for the inconvenience. Thank you.</h2>";
    }

    $conn -> close();
}

?>
</body>
</html>