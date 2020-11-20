<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-DO</title>
</head>
<body>
<h1>TO DO</h1>

<form method="post" action="/storeTask">
<label for="task">Add New Task:</label><br>
<input type="text" id="task" name="task" value="To-Do Task">
<input type="submit" value="Submit">
</form>
<ul>
<?php
echo \App\Viewhelpers\HomepageViewhelper::displayTaskList($tasks);
?>
</ul>

<form method="get" action="/completedTasks">
    <input type="submit" value="View Completed">
</form>

</body>
</html>









