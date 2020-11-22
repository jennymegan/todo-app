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
<script>

    // you are so nearly there! got one working with ids for edit and updated, but need to take into account what happens when more are generated
    //perhaps add an event listener tied to each id? going to have to do a foreach otherwise, could get messy.
    document.querySelector('.edit').addEventListener('click', (e) => {
        e.preventDefault()
        let editable = document.querySelector('.swap-for-input').textContent
        let id = document.querySelector('.swap-for-input').dataset.id
        document.querySelector('.swap-for-input').innerHTML = '' +
            '<form method="post" action="/storeTask/'+ id +'" >' +
            '<input type="text" class="new-value" data-id="'+ id +'" value=" ' +  editable  +' ">' +
            '<input type="button" class="updated button" value="Submit Edit">' +
            '</form>'

        document.querySelector('.updated').addEventListener('click', (e) => {
            e.preventDefault()
            let value = document.querySelector('.new-value').value
            console.log(value)
            let id = document.querySelector('.new-value').dataset.id
            console.log(id)
            // fetch('/updateTask', {
            //     method: 'post',
            //     body: JSON.stringify({task: value, id: id})
            // })
            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", "/updateTask", true);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send(JSON.stringify({task: value, id: id}));

            document.querySelector('.swap-for-input').innerHTML = '<li class="swap-for-input" data-id="' + id + '">' + value +
                '            <form method="post" action="/markComplete/' + id + '">\n' +
                '            <input type="submit" value ="Mark as Complete"></li>\n' +
                '            </form>\n' +
                '            <input type="submit" id="edit" value ="Edit">'

        })

    })


</script>









