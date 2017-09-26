$(document).ready(function(){
    console.log("Data table");
    $("#tableEmpleador").DataTable();   
    var empleador =0;
    $(document).on('click','.btnEmpleadorAgre',function(e){
        empleador = $(this).val();
        $("#contentTable").hide();
        $("#contentUsu").show();
        
    });
    $("#btnAgregarEmpleado").click(function(){
        $(".inco").remove();
         var cc=0;
            $(".inputs").each(
                function(index, inpu) {
                    if(inpu.value ==""){
                        cc++;
                        $("#"+inpu.id).after("<div class='inco'> </br> <p  style='color:#F70606;'>Campo incorrecto</p></div>");
                    }
                }
            );
            if($("#selectSexo").val()=="A0"){
                $("#selectSexo").after("<div class='inco'> </br> <p  style='color:#F70606;'>selecione un campo</p></div>");
                cc++;
            }
            if ($("#selectTipoContrato").val()=="A0"){
                $("#selectTipoContrato").after("<div class='inco'> </br> <p  style='color:#F70606;'>selecione un campo</p></div>");
                cc++;
            }       
            if(cc==0){
                var json={
                    empleadorI:empleador,
                    nombre :$("#txtNombre").val(),
                    sexo : $("#selectSexo").val(),
                    cedula: $("#txtCedula").val(),
                    telefono:$("#txtTelefono").val(),
                    tipoContrato:$("#selectTipoContrato").val(),
                };
        
                $.ajax({
                    url:"/empleado/create",
                    type:"post",
                    datatype:"json",
                    data: JSON.stringify(json),
                    success:function(resulSet){
                        $("input").val("");
                        $("#selectSexo").val("A0");
                        $("#selectSexo").change();
                        var r = confirm(resulSet.data+ "\n Desea agregar mas empleados?");
                        if (r == false) {
                            $("#contentUsu").hide();
                            $("#contentTable").show();
                        } 
                    }
                });
            }
    });
});