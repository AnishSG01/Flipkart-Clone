var login_btn = document.getElementById('login_modal_btn');
var login_modal = document.querySelector('.login-modal');
login_btn.addEventListener('click', function(){
    login_modal.classList.add('login-active');
});