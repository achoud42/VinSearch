<!DOCTYPE html>
<html>

<head>
    <title>VinSearch</title>
</head>



<?php

function vinSearch()
{
    include 'config.php';
    $search = "";
    if (isset($_GET['query'])) {
        $search = $_GET['query'];
    }
    if ($search == "") {
         echo "<div style=\"margin-left: 50px\">";
         echo "<div>Please Enter VIN here</div>";
    } else {
        $sql = "select *  from vehicle_listings WHERE (`vin`= '$search')";
        $run = mysqli_query($conn, $sql);

        $foundrows = mysqli_num_rows($run);

        if ($foundrows == 0) {
            echo "Unable to Find VIN - $search in Database";
        } else {

            echo "Data Fetched Successfully for VIN $search";
            $result = mysqli_fetch_array($run);
            echo "<br>";
            echo "<br>";

            echo "VIN :" . $result['vin'];
            echo "<br>";

            echo "Year  :" . $result['year'];
            echo "<br>";
            echo "Make  :" . $result['make'];
            echo "<br>";
            echo "Model  :" . $result['model'];
        }
    }
}

?>


<body>
    <form action="search.php" method="GET">
        <label> VIN: </label>
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
    <?php vinSearch(); ?>

</body>

</html>
