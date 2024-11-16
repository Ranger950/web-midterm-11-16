<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/nuk.jpg" />
        <meta charset="UTF-8">
        <title>NUK Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
            <br>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
 <!DOCTYPE html>
<html>
<head>
    <title>Sales Chart</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Item');
            data.addColumn('number', 'Sold Quantity');

            // Fetch the data from the PHP script
            var jsonData = <?php echo getChartData(); ?>;

            // Add data rows from the JSON data
            data.addRows(jsonData);

            // Set chart options
            var options = {'title':'Items Sold',
                           'width':800,
                           'height':600};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

        <?php
        function getChartData() {
            // Database connection
            $servername = "localhost";
            $username = "id22248101_nuk123";
            $password = "@Abc987654321";
            $dbname = "id22248101_nukstore123";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch sold items data
            $sql = "SELECT items.name, COUNT(users_items.item_id) AS sold_quantity
                    FROM users_items
                    JOIN items ON users_items.item_id = items.id
                    WHERE users_items.status = 'Confirmed'
                    GROUP BY users_items.item_id";

            $result = $conn->query($sql);

            $data = [];
            if ($result->num_rows > 0) {
                // Fetch data and prepare JSON format
                while($row = $result->fetch_assoc()) {
                    $data[] = [$row['name'], (int)$row['sold_quantity']];
                }
            } else {
                echo "0 results";
            }

            $conn->close();

            return json_encode($data);
        }
        ?>
    </script>
</head>
<body>
    <h1>熱銷排行榜</h1>
    <div id="chart_div"></div>
</body>
</html>
