function validar_caracteres_correcto(){
    var correo, clave, expresion;
    correo=document.getElementById("correo").value;
    clave=document.getElementById("clave").value;
    expresion=/\w+@\w+\.+[a-z]/;

 if(correo===""||clave===""){
     alert("¡Todos los Campos son Obligatorios!");
     return false;
     
}else if(!expresion.test(correo)){
        alert("El formato del correo no es valido, para guia: 'ejemplo@dominio.com'");
        return false;
        
    }
    else{ if(correo.length>100){
           
           alert("El Correo del Docente es muy Largo");
           return false;
           
       }
        }
    
}