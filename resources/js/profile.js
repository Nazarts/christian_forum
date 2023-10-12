import Inputmask from 'inputmask';

document.addEventListener('DOMContentLoaded', () => {
    let phone_input = document.getElementById("phone_input");
    let phone_m = new Inputmask("+(380)99-999-99-99");
    phone_m.mask(phone_input);
})
