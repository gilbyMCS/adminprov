//funcio de registro de registro_negocio

$(document).ready(function(){

    $('#btn-agregar').click(function(){
        datos=$('#formulario-ejemplo').serialize();

        $.ajax({
            type:"POST",
            data:datos,
            url:"../controller/variables_registroLocal.php",
            success:function(r){
                if (r == 1) {
                    $('#formulario-ejemplo')[0].reset();
                    alertify.seccess("El registro a sido un exito");
                }
                else{
                    echo ("el registro no se puede completar");
                }   
            }
        });
    });
});
