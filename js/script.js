let popup = document.getElementById("popup")
let popupOverlay = document.getElementById("popupOverlay")
let everyDone = document.querySelector('.every-done')
let everyNotDone = document.querySelector('.every-not-done')
let taskBlock = document.querySelectorAll('.task-block')
let openPopup = document.querySelectorAll('.openPopup')

for(let openElement of openPopup){
    openElement.addEventListener("click", () => {
    popup.style.display = "grid"
    popupOverlay.style.display = "block"
    document.getElementById("openPopup").classList.toggle('active')
});
}
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
    document.getElementById("openPopup").classList.toggle('active')
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
