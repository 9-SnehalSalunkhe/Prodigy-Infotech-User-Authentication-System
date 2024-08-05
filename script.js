const signupButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})
const form = document.querySelector("form");
emailInput = emailField.querySelector(".email");
passInput = passField.querySelector(".password");
// Email Validtion
function checkEmail() {
    const emaiPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailInput.value.match(emaiPattern)) {
      return emailField.classList.add("invalid"); //adding invalid class if email value do not mathced with email pattern
    }
    emailField.classList.remove("invalid"); //removing invalid class if email value matched with emaiPattern
  }
  // Hide and show password
  const eyeIcons = document.querySelectorAll(".show-hide");
  eyeIcons.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
      const pInput = eyeIcon.parentElement.querySelector("input"); //getting parent element of eye icon and selecting the password input
      if (pInput.type === "password") {
        eyeIcon.classList.replace("bx-hide", "bx-show");
        return (pInput.type = "text");
      }
      eyeIcon.classList.replace("bx-show", "bx-hide");
      pInput.type = "password";
    });
  });
  // Password Validation
  function createPass() {
    const passPattern =
      /^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;
    if (!passInput.value.match(passPattern)) {
      return passField.classList.add("invalid"); //adding invalid class if password input value do not match with passPattern
    }
    passField.classList.remove("invalid"); //removing invalid class if password input value matched with passPattern
  }


  form.addEventListener("submit", (e) => {
    e.preventDefault(); //preventing form submitting
    checkEmail();
    createPass();
  }
)

// credential refresh
document.getElementById('loginform').reset();
document.getElementById('registerform').reset();