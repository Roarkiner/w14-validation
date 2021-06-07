document.querySelector('#pwd_input').querySelector('img').addEventListener('click', (el) =>{
    el = el.target;
    var pwd = document.querySelector('#password');

    if(el.getAttribute('src') === './assets/closed_eye.png'){
        el.setAttribute('src', './assets/open_eye.png');
        el.setAttribute('alt', 'Cacher');
        pwd.setAttribute('type', 'text');
    } else {
        el.setAttribute('src', './assets/closed_eye.png');
        el.setAttribute('alt', 'Afficher');
        pwd.setAttribute('type', 'password');
    }
});