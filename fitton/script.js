const genderSelect = document.getElementById('genderSelect');
const genderInput = document.getElementById('genderInput');

genderSelect.addEventListener('change', () => {
    genderInput.value = genderSelect.value;
});

function cut() {
    var c = document.getElementById("cutelem");
    if (c) {
        c.style.opacity = 0;
    } else {
        console.error("Element with id 'cutelem' not found.");
    }
}