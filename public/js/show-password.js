var checkbox = document.getElementById("checkbox")
var password_list = document.getElementsByClassName("password")

checkbox.addEventListener("change", (e) => {
    e.preventDefault()

    for(let password of password_list){
        if(checkbox.checked){
            password.type = "text"
        }else{
            password.type = "password"
        }
    }
})