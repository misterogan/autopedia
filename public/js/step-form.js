initMultiStepForm();

function initMultiStepForm() {
    const progressNumber = document.querySelectorAll(".step").length;
    const slidePage = document.querySelector(".slide-page");
    // const submitBtn = document.querySelector(".submit");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    const pages = document.querySelectorAll(".page");
    const nextButtons = document.querySelectorAll(".next");
    const prevButtons = document.querySelectorAll(".prev");
    const stepsNumber = pages.length;

    if (progressNumber !== stepsNumber) {
        console.warn(
            "Error, number of steps in progress bar do not match number of pages"
        );
    }

    document.documentElement.style.setProperty("--stepNumber", stepsNumber);

    let current = 1;

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener("click", function (event) {
            event.preventDefault();

            inputsValid = validateInputs(this);
            // inputsValid = true;

            if (inputsValid) {
                slidePage.style.marginLeft = `-${
                    (100 / stepsNumber) * current
                }%`;
                console.log("Step = " + (100 / stepsNumber) * current);
                console.log("Current = " + current);
                bullet[current - 1].classList.add("active");
                progressCheck[current - 1].classList.add("active");
                current += 1;
            }
        });
    }

    for (let i = 0; i < prevButtons.length; i++) {
        prevButtons[i].addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = `-${
                (100 / stepsNumber) * (current - 2)
            }%`;
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            current -= 1;
        });
    }
    // submitBtn.addEventListener("click", function () {
    //     bullet[current - 1].classList.add("active");
    //     progressCheck[current - 1].classList.add("active");
    //     current += 1;
    //     setTimeout(function () {
    //         alert("Your Form Successfully Signed up");
    //         location.reload();
    //     }, 800);
    // });

    function validateInputs(ths) {
        let inputsValid = true;

        const inputs =
            ths.parentElement.parentElement.querySelectorAll(".form-control");
        const feedback =
            ths.parentElement.parentElement.querySelectorAll("small");

        for (let i = 0; i < inputs.length; i++) {
            const valid = inputs[i].checkValidity();
            console.log(valid);
            if (!valid) {
                inputsValid = false;
                inputs[i].classList.add("invalid-input");
                // feedback[i].classList.add("d-block");
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please fill out all required fields (*)",
                    showConfirmButton: true,
                    confirmButtonColor: "#0086FF",
                    confirmButtonText: "OK, Close",
                });
                window.scrollTo({
                    top: 500,
                    behavior: "smooth"
                });
            } else {
                inputs[i].classList.remove("invalid-input");
                window.scrollTo({
                    top: 500,
                    behavior: "smooth",
                });
                // feedback[i].classList.remove("d-block");
            }
        }

        return inputsValid;
    }
}