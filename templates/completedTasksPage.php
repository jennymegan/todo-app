<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-DO</title>
</head>
<body>

<?php

foreach ($tasks as $task) {
    echo '<li>' . $task['name'] . ' 
<form method="post" action="/deleteTask/' . $task['id'] . '">
<input type="submit" value ="Delete"></li>
</form>';
}

?>

</body>
</html>