//funcio de registro de registro_negocio

$(document).ready(function(){
    $("#mitabla").load("../view/editar_registro.php");
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
                    alertify.error("el registro no se puede completar");
                }   
            }
        });
    });
});

$(document).ready(function () {
    $("#btnaact").click(function () {
      datos = $("#registro_act").serialize();
      $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/actualizarC.php",
        success: function (r) {
          if (r == 1) {
            //Linea para "refrescar" y actualizar la tabla cuando se eliminan datos nuevos
            alertify.success("Se actualizo");
          } else {
            alertify.error("No se pudo actualizar el registro");
          }
        },
      });
    });
  });

  $(document).ready(function () {
    $("#btnactualizar").click(function () {
      datos = $("#img_update").serialize();
      $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/actualizarI.php",
        success: function (r) {
          if (r == 1) {
            //Linea para "refrescar" y actualizar la tabla cuando se eliminan datos nuevos
            alertify.success("Se actualizo");
          } else {
            alertify.error("No se pudo actualizar el registro");
          }
        },
      });
    });
  });

