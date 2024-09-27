const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const nextBtnFourth = document.querySelector(".next-3");
const prevBtnFifth = document.querySelector(".prev-4");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

function showPage(index) {
    slidePage.style.marginLeft = `-${(index - 1) * 25}%`;
}

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validateLetters(name) {
    const regex = /^[A-Za-z]+$/;
    return regex.test(name);
}

function validatePage(pageIndex) {
    const fields = document.querySelectorAll(`.page:nth-child(${pageIndex + 1}) input[required], .page:nth-child(${pageIndex + 1}) select[required]`);
    let valid = true;

    fields.forEach(field => {
        if (!field.checkValidity()) {
            alert(`${field.previousElementSibling.textContent} is required and must be valid.`);
            field.focus();
            valid = false;
            return;
        }

        // Additional validation for first name and last name
        if ((field.id === 'fname' || field.id === 'lname') && !validateLetters(field.value)) {
            alert(`${field.previousElementSibling.textContent} must contain only letters.`);
            field.focus();
            valid = false;
            return;
        }

        // Additional email validation for the email field
        if (field.type === 'text' && field.id === 'mail' && !validateEmail(field.value)) {
            alert("Please enter a valid email address.");
            field.focus();
            valid = false;
            return;
        }
    });

    return valid;
}

nextBtnFirst.addEventListener("click", function (event) {
    event.preventDefault();
    if (validatePage(0)) {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        showPage(current);
    }
});

nextBtnSec.addEventListener("click", function (event) {
    event.preventDefault();
    if (validatePage(1)) {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        showPage(current);
    }
});

nextBtnThird.addEventListener("click", function (event) {
    event.preventDefault();
    if (validatePage(2)) {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        showPage(current);
    }
});

nextBtnFourth.addEventListener("click", function (event) {
    event.preventDefault();
    if (validatePage(3)) {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        showPage(current);
    }
});

prevBtnSec.addEventListener("click", function (event) {
    event.preventDefault();
    current -= 1;
    bullet[current - 1].classList.remove("active");
    progressCheck[current - 1].classList.remove("active");
    progressText[current - 1].classList.remove("active");
    showPage(current);
});

prevBtnThird.addEventListener("click", function (event) {
    event.preventDefault();
    current -= 1;
    bullet[current - 1].classList.remove("active");
    progressCheck[current - 1].classList.remove("active");
    progressText[current - 1].classList.remove("active");
    showPage(current);
});

prevBtnFourth.addEventListener("click", function (event) {
    event.preventDefault();
    current -= 1;
    bullet[current - 1].classList.remove("active");
    progressCheck[current - 1].classList.remove("active");
    progressText[current - 1].classList.remove("active");
    showPage(current);
});

prevBtnFifth.addEventListener("click", function (event) {
    event.preventDefault();
    current -= 1;
    bullet[current - 1].classList.remove("active");
    progressCheck[current - 1].classList.remove("active");
    progressText[current - 1].classList.remove("active");
    showPage(current);
});

submitBtn.addEventListener("click", function () {
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;

    setTimeout(function () {
        alert("Your Form Successfully Signed up");
        location.reload();
    }, 800);
});

// Initial page display
showPage(current);
