let user=document.getElementById('user');
let userPanel=document.getElementById('user-panel');
let closeBtn=document.getElementById('close-btn');

user.addEventListener("click",()=>{
    userPanel.classList.add('show');
});
closeBtn.addEventListener("click",()=>{
    userPanel.classList.remove('show');
});