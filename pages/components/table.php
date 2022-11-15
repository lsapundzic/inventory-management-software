<?php
include_once "../database/connect.php";
?>

<main>
    <?php

    try {
        // Query that I want to be displayed 
        $sql = "SELECT * FROM contact";

        // Establish a connection with the database and execute the search query 
        $result = mysqli_query($conn, $sql);

        // Check if the connection actually returns anything 
        $resultCheck = mysqli_num_rows($result);

    // What works? 
    echo "<div>{$conn} / {$result} / {$resultCheck}</div>";

    // Test if this works 
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>{$row['name']}</div>";
        }
    } catch (\Throwable $th) {
        echo "Unable to display database info. Caught exception in table.php";
    }


    ?>

    <table>
        <caption>Table Displaying The Product Information</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>PRO</th>
                <th>Name</th>
                <th>Category</th>
                <th>Supplier</th>
                <th>Width</th>
                <th>Height</th>
                <th>Length</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>SKU331152</td>
                <td>MICE8 Centrifuge</td>
                <td>Centrifuge</td>
                <td>Changsha Yingtai Centrifuge</td>
                <td>25</td>
                <td>30</td>
                <td>35</td>
                <td>8.5</td>
            </tr>
        </tbody>
    </table>
</main>