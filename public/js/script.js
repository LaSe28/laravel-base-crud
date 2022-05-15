let popup = document.querySelector('#popup')
let abort = document.querySelector('#abort')
let delBtn = document.querySelector('#delBtn')

delBtn.addEventListener('click', function() {
    popup.classList.remove('hidden')
})

abort.addEventListener('click', function() {
    popup.classList.add('hidden')
})


