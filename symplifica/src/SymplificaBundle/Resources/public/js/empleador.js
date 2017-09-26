$(document).ready(function(){
  console.log("Jquesry");
    $("#btnAgregarEmpleador").click(function(){
        $(".inco").remove();
        var cc=0;
            $("input").each(
                function(index, inpu) {
                    console.log(inpu);
                    if(inpu.value ==""){
                        $("#"+inpu.id).after("<div class='inco'> </br> <p  style='color:#F70606;'>Campo incorrecto</p></div>");
                        cc++;
                    }
                }
            );
        if($("#selectSexo").val()=="A0"){
            $("#selectSexo").after("<div class='inco'> </br> <p  style='color:#F70606;'>selecione un campo</p></div>");
            c++;
        }
        if(cc==0){
            var json={
                nombre :$("#txtNombre").val(),
                sexo : $("#selectSexo").val(),
                cedula: $("#txtCedula").val(),
                telefono:$("#txtTelefono").val(),
                dirrecion:$("#txtDirrecion").val(),
                fechaNacimiento:$("#txtFechaNacimiento").val()
            };
    
            $.ajax({
                url:"/empleador/create",
                type:"post",
                datatype:"json",
                data: JSON.stringify(json),
                success:function(resulSet){
                    alert(resulSet.data);
                    $("input").val("");
                    $("#selectSexo").val("A0");
                    $("#selectSexo").change();
                }
            }); 
        }
    });

});


