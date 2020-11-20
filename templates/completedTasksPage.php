<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-DO</title>
</head>
<body>
<h1>DONESIES</h1>

<?php
echo \App\Viewhelpers\CompletedTasksPageViewhelper::displayCompletedTasks($tasks);
?>

<form method="get" action="/">
    <input type="submit" value="View ToDo">
</form>

</body>
</html>