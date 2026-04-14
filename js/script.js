document.getElementById('openPopup').addEventListener('click', () => {
    document.getElementById('popup').style.display = 'block'
    document.getElementById('popupOverlay').style.display = 'block'
})
function closePopup() {
    document.getElementById('popup').style.display = 'none'
    document.getElementById('popupOverlay').style.display = 'none'
}
