$(document).ready(function (){
    $('#btnagregar').click(function(){
        datos= $('#registro').serialize();

        $.ajax({
            type: "POST",
            data: datos,
            url: "controller/loginController.php",
            success: function(r){
                if (r == 1) {
                    $('#registro')[0].reset();
                     alertify.success("Registrado con exito");
                    
                }else{
                    alertify.error("el registro no pude ser completado")
                }
            }
        })

    });
});