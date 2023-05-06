const verPasswordBtn2 = document.getElementById('ver-password-02');
const passwordInput2 = document.getElementById('validationCustom02');

verPasswordBtn2.addEventListener('click', () => {
  if (passwordInput2.type === 'password') {
    passwordInput2.type = 'text';
    verPasswordBtn2.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    passwordInput2.type = 'password';
    verPasswordBtn2.innerHTML = '<i class="fas fa-eye"></i>';
  }
});


const verPasswordBtn3 = document.getElementById('ver-password-03');
const passwordInput3 = document.getElementById('validationCustom03');

verPasswordBtn3.addEventListener('click', () => {
  if (passwordInput3.type === 'password') {
    passwordInput3.type = 'text';
    verPasswordBtn3.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    passwordInput3.type = 'password';
    verPasswordBtn3.innerHTML = '<i class="fas fa-eye"></i>';
  }
});


  