import Inputmask from 'inputmask';
import axios from "axios";

const validators = {
    'password_inp': () => {
        let password_inp = document.getElementById('password_inp');
        const passwordRegex = /^.{8,}$/;

        if (!passwordRegex.test(password_inp.value)) {
            return 'Пароль мусить мати мінімум 8 символів';
        }
        return true;
    },
    'name_inp': () => {
        let name_inp = document.getElementById('name_inp');
        const nameRegex = /.{2,}/;

        if (!nameRegex.test(name_inp.value)) {
            return "Ім'я мусить мати мінімум 3 символа";
        }
        return true;
    },
    'phone_input': () => {
        let phone_inp = document.getElementById('phone_input');
        const phoneRegex = /.{9,}/;

        if (!phoneRegex.test(phone_inp.inputmask.unmaskedvalue())) {
            return "Введіть повністю номер телефону";
        }
        return true;
    }
}

document.addEventListener('DOMContentLoaded', function () {

    setTimeout(() => {
        let phone_input = document.getElementById("phone_input");
        let phone_m = new Inputmask("+(380)99-999-99-99");
        phone_m.mask(phone_input);
        let phone_login_input = document.getElementById("phone_login_input");
        let phone_login_m = new Inputmask("+(380)99-999-99-99");
        phone_login_m.mask(phone_login_input);
    }, 3000);

    document.getElementById('register_user').addEventListener(
        'submit',
        (ev) => {

            let isCompleted = checkMasks();
            if (!isCompleted) {
                ev.preventDefault();
            }
        }
    )

    document.getElementById('login_user').addEventListener(
        'submit', submitLogin
    )
})

function submitLogin(ev) {
    ev.preventDefault();
    let loginForm = ev.currentTarget;
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    axios.post('/login', loginForm, {
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    }).then((res) => {
        location.href = '/profile';
    }).catch((r) => {
        if (r.response.status < 500) {
            for (const rKey in r.response.data.errors) {
                let inputEl = document.querySelector(`#${loginForm.id} input[name='${rKey}']`);
                inputEl.parentElement.dataset.error = r.response.data.errors[rKey];
                removeErrorsOnInput(inputEl);
            }
        }
    })
}

function removeErrorsOnInput(inputEl) {
    inputEl.addEventListener('input', () => {
        inputEl.parentElement.removeAttribute('data-error');
        inputEl.removeEventListener('input', removeErrorsOnInput)
    })
}

function checkMasks(masks) {
    let isCompleted = true;
    for (const validator in validators) {
        let checkedResult = validators[validator]();
        if (checkedResult === true) {
            continue;
        }
        let inputEl = document.getElementById(validator);
        inputEl.parentElement.dataset.error = checkedResult;
        removeErrorsOnInput(inputEl);
        isCompleted = false;
    }
    return isCompleted;
}
