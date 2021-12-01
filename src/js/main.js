const nombre=document.getElementById("name");
const email=document.getElementById("email");
const pass=document.getElementById("password");
const form=document.getElementById("form");
const parrafo=document.getElementById("alerta");

form.addEventListener("submit",e=>{
    let adv="";
    let mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let ent = false;

    if(nombre.value.length<6){
        adv+="El nombre es muy corto <br>";
        ent = true;
    }
    if(!mail.test(email.value)){
        adv+="El formarto del correo es incorrecto <br>";
        ent = true;
    }
    if(pass.value.length<8){
        adv+="La contraseña debe ser mayor a 7 digitos";
        ent = true;
    }

    if(ent){
        parrafo.innerHTML=adv;
    }else{
        alert("Formulario enviado correctamente");
        form.reset();
    }
})