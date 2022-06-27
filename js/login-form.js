let loginForm=document.querySelector('.login-form');
let loginBtn=document.getElementById('login-btn');

loginBtn.addEventListener("click",()=>{
    loginForm.style.display="flex";
    loginForm.classList.add('animation-login');
});

let loginCloseBtn=document.querySelector('.close-btn');

loginCloseBtn.addEventListener("click",()=>{
    loginForm.classList.remove('animation-login');
});