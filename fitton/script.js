const genderSelect = document.getElementById('genderSelect');
const genderInput = document.getElementById('genderInput');

genderSelect.addEventListener('change', () => {
    genderInput.value = genderSelect.value;
});



function showPopup() {
    const popup = document.getElementById('myPopup');
    

    setTimeout(() => {
        popup.style.opacity = 0;
    }, 2000);
}
