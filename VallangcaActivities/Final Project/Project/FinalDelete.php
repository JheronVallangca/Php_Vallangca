<?php
if (isset($_POST['Delete'])) {
    $conn = new mysqli('localhost', 'root', '', 'Vallangca');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }
    $userId = $_POST['userID'];

    $queryDelete = "DELETE FROM users WHERE userID='$userId'";
    
    $resultDelete = mysqli_query($conn, $queryDelete);

    if ($resultDelete) {
        echo 'Record deleted successfully.';
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    
</head>
<body>
    <h1>Your data has been Deleted!</h1>
    <button ><a href="FinalView.php">VIEW DETAILS</button></a>
   
</body>
</html>