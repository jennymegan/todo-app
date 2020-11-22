
document.querySelector('form .edit').addEventListener('submit', (e) => {
    e.preventDefault()
    let editable = document.querySelector('.swap-for-input').textContent
    let id = document.querySelector('.swap-for-input').dataset.id
    document.querySelector('.swap-for-input').innerHTML = '' +
        '<form method="post" action="/storeTask/'+ id +'" >' +
        '<input type="text" class="new-value" data-id="'+ id +'" value=" ' +  editable  +' ">' +
        '<input type="button" class="button" value="Submit Edit">' +
        '</form>'
})

//wondering if this above will handle the PHP when it displays in the DOM?

document.querySelector('.button').addEventListener('submit', (e) => {
    e.preventDefault()
    let value = document.querySelector('.new-value').value
    let id = document.querySelector('.new-value').dataset.id
    fetch('/updateTask', {
        method: 'post',
        body: JSON.stringify({task: value, id: id})
    })
})

