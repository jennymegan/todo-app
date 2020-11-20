<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-DO</title>
</head>
<body>
<h1>DONESIES</h1>
<ul>
<?php
echo \App\Viewhelpers\CompletedTasksPageViewhelper::displayCompletedTasks($tasks);
?>
</ul>
<form method="get" action="/">
    <input type="submit" value="View ToDo">
</form>

</body>
</html>