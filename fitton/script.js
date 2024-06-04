const genderSelect = document.getElementById('genderSelect');
const genderInput = document.getElementById('genderInput');

genderSelect.addEventListener('change', () => {
    genderInput.value = genderSelect.value;
});