<!DOCTYPE html>
<html>
<head>
    <title>Your Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <style type="text/css">
        table{
            margin-bottom: 20px;
        }
        .btns{
            float: right;
        }
    </style>
</head>
<body class="w3-container">
    <div class="w3-indigo w3-padding-16 w3-center">
    <h1>ADMIN DASHBOARD</h1>
<h3 class="w3-silver">Reported Crimes</h3>
</div>
    <table class="w3-table-all w3-card-4 w3-hoverable">
        <thead>
            <tr>
                <th>ID</th>
                <th>WITNESS NAME</th>
                <th>AGE</th>
                <th>PHONE</th>
                <th>CITIZENSHIP</th>  
                <th>CRIME</th>
                <th>VICTIM</th>
                <th>SUSPECTS</th>
                <th>WITNESSES</th>
                <th>SCENE</th>
                <th>DETAILS</th>     
                <th>Date and Time REPORTED</th>
            </tr>
        </thead>
        <tbody>
            <?php include('fetch_crimes.php');

            $data = retrieveData();
            foreach ($data as $row) {
                echo '<tr>';
                echo '<td>' . $row['ID'] . '</td>';
                echo '<td>' . $row['fullName'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['citizenship'] . '</td>';
                echo '<td>' . $row['crime'] . '</td>';
                echo '<td>' . $row['victim'] . '</td>';
                echo '<td>' . $row['suspects'] . '</td>';
                echo '<td>' . $row['other_witnesses'] . '</td>';
                echo '<td>' . $row['crime_scene'] . '</td>';
                echo '<td>' . $row['details'] . '</td>';
                echo '<td>' . $row['time'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
     <a href="index.html" class="w3-button w3-teal">HOME</a>
       <div class="btns">
        <a href="admin.html" class="w3-button w3-indigo">BACK</a>
        <a href="logout.php" class="w3-button w3-red">Log Out</a>
</div>
</div>
</body>
</html>
