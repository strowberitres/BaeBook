
const passwordInput = document.getElementById("password");
const passwordHideIcon = document.querySelector(".pw-hide");

passwordHideIcon.addEventListener("click", () => {
    if (passwordInput.type === "password") {
        passwordInput.type = "text"; // Show password
        passwordHideIcon.classList.remove("pw-hide");
        passwordHideIcon.classList.add("bxs-show"); // Add the eye icon class
    } else {
        passwordInput.type = "password"; // Hide password
        passwordHideIcon.classList.remove("bxs-show"); // Remove the eye icon class
        passwordHideIcon.classList.add("pw-hide");
    }
});






