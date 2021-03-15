document.addEventListener("DOMContentLoaded",()=>{
    let mail = document.getElementsByTagName('input')[2];
    let expr = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
    let warning = document.querySelector('section form p');

    console.log(mail)

    
    let verif = ()=>{

        if(!mail.value){
            alert("votre mail svp!!")
        }else{
            alert(mail.value)
        }

        
        !mail.value ? warning.innerText="Mail obligatoire":warning.innerText=`Votre mail est ${mail.value}`
        expr.test(mail.value) ? warning.innerText= `${mail.value}`: warning.innerText="Mail invalide"
        localStorage.setItem("login", mail.value);
        
    }
})