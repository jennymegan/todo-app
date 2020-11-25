<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-DO</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>TO DO</h1>

<form method="post" action="/storeTask">
<label for="task">Add New Task:</label><br>
<input type="text" id="task" name="task" value="To-Do Task">
<input type="submit" value="Submit">
</form>

<?php
echo \App\Viewhelpers\HomepageViewhelper::displayTaskList($tasks);
?>


<form method="get" action="/completedTasks">
    <input type="submit" value="View Completed">
</form>

</body>
</html>
