var mute = true;

document.querySelector('#burger_menu').addEventListener('click', () =>{
    var menu_style = document.querySelector('#menu').style.display;

    if( menu_style === "block" ){
        document.querySelector('#menu').style.display = "none";
    } else {
        document.querySelector('#menu').style.display = "block";
    }
});

window.addEventListener('resize', (el)=>{
    el = el.target;

    var width = document.body.clientWidth;
    if( width > 640 ){
        document.querySelector('#menu').style.display = "flex";
    } else {
        document.querySelector('#menu').style.display = "none";
    }
});

var sound = new Audio('./assets/cursor_move.mp3');
sound.volume = 0.5;
var menu = document.querySelector('header').querySelectorAll('a');

menu.forEach(a => {
    a.addEventListener('mouseover', () =>{
        if(mute === true){
            mute = false;
        } else {
            sound.play();
        }
    });
});