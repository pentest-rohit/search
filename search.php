<?php
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $query = "SELECT * FROM table_name WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row['name'] . "<br>";
            echo "Email: " . $row['email'] . "<br><br>";
        }
    } else {
        echo "No results found.";
    }
}

mysqli_close($conn);
?>
