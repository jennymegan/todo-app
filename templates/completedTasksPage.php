<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-DONE</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>DONE</h1>

<?php
echo \App\Viewhelpers\CompletedTasksPageViewhelper::displayCompletedTasks($tasks);
?>

<form method="get" action="/">
    <input type="submit" value="View ToDo">
</form>

</body>
</html>