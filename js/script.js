let popup = document.getElementById("popup")
let popupOverlay = document.getElementById("popupOverlay")
let everyDone = document.querySelector('.every-done')
let everyNotDone = document.querySelector('.every-not-done')
let taskBlock = document.querySelectorAll('.task-block')

document.getElementById("openPopup").addEventListener("click", () => {
    popup.style.display = "grid"
    popupOverlay.style.display = "block"
});
function closePopup() {
    popup.style.display = "none"
    popupOverlay.style.display = "none"
    taskBlock.forEach(block =>{
        block.style.display = 'grid'
    })
}
document.getElementById("popupOverlay").addEventListener("click", () => {
    popup.style.display = "none"
    popupOverlay.style.display = "none"
});

everyDone.addEventListener('click', function(){
    taskBlock.forEach(block =>{
    if(block.classList.contains('todo') || block.classList.contains('in_progress')){
        block.style.display = "none"
    }
    else{
        block.style.display = 'grid'
    }
    })
})
everyNotDone.addEventListener('click', function(){
    taskBlock.forEach(block =>{
    if(block.classList.contains('done')){
        block.style.display = "none"
    }
    else{
        block.style.display = "grid"
        }
    })
})