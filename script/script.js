window.addEventListener('load', carga);
function carga(){
    let container = document.getElementById('container')
    let login = document.getElementsByClassName('right')
    let registro = document.getElementById('left');
    registro.addEventListener("click", displaySignup, false);
    for (var i = 0; i < login.length; i++) {
        login[i].addEventListener("click", displaySignupOut, false);
    }
}

function getLoginClassName(){

}
function displaySignupOut(){
    let left = document.getElementById('left');
    left.classList.remove('right');
    left.classList.add('left');
    this.classList.remove('left');
    this.classList.add('right');
}
function displaySignup(){
    let right = document.getElementById('right');
    let inicial = this.className; //clase actual de css del elemento
    console.log("We're going to change signup chart");
    console.log(this.className);
    this.classList.remove(inicial);
    this.classList.add('right');
    right.classList.remove(this.className);
    right.classList.add('left');

}
function displayLogin(){
    console.log("funciona ClassName");
};
