const progresss = document.getElementById("progresss");
const formSteps = document.querySelectorAll(".form-step");
const prevBtn = document.querySelectorAll(".btn-prev");
const nextBtn = document.querySelectorAll(".btn-next");
const progressStep = document.querySelectorAll(".progresss-step");

let formStepCount = 0;

nextBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepCount++;
        updateSteps();
        updateProgressBar();
    });
});

prevBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepCount--;
        updateSteps();
        updateProgressBar();
    });
});

function updateSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active");
    });

    formSteps[formStepCount].classList.add("form-step-active");
}

function updateProgressBar() {
    progressStep.forEach((val, index) => {
        index < formStepCount + 1
            ? val.classList.add("progresss-step-active")
            : val.classList.remove("progresss-step-active");
    });

    // const progActive = document.querySelectorAll(".progresss-step-active");

    // progresss.style.width =
    //     ((progActive.length - 1) / (progressStep.length - 1)) * 70 + "%";
}
