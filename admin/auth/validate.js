//регулярные выражения в джаваскрипт


let password = document.getElementsByName("password");
let dubl_password = document.getElementsByName("dubl_password");
let checkbox = document.getElementsByName("personal");
checkbox = checkbox[0];
let btn = document.querySelector("#sub");
btn.setAttribute("disabled", "true");

checkbox.onchange = () => {
if(checkbox.checked){
    btn.removeAttribute("disabled");
} else{
    btn.setAttribute("disabled", "true");
}
}


dubl_password[0].onblur = () => {
    if( password[0].value==dubl_password[0].value){

        password[0].classList.remove("is-danger");
        dubl_password[0].classList.remove("is-danger");

        password[0].classList.add("is-success");
        dubl_password[0].classList.add("is-success");
    } else{
        alert("они разные!");

        password[0].classList.remove("is-success");
        dubl_password[0].classList.remove("is-success");

        password[0].classList.add("is-danger");
        dubl_password[0].classList.add("is-danger");
    }
}
