<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-DO</title>
</head>
<body>

<form method="post" action="/storeTask">
<label for="task">Add New Task:</label><br>
<input type="text" id="task" name="task" value="To-Do Task">
<input type="submit" value="Submit">
</form>
<ul>
<?php

foreach ($tasks as $task) {
echo '<li>' . $task['name'] . ' 
<form method="post" action="/markComplete/' . $task['id'] . '">
<input type="submit" value ="Mark as Complete"></li>
</form>';
}


?>
</ul>

<form method="get" action="/completedTasks">
    <input type="submit" value="View Completed">
</form>

</body>
</html>









