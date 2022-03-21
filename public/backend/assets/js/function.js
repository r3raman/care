$(document).ready(function(){
    $("#patient_edit").hide();
    $("#patient_new").show();
    $("#patient_add").hide();
    $(document).on("click",".clients",function() {
        var name = $.trim($(this).html());
        $("#search_clients").val(name);
        $("#patient_edit").show();
        $("#patient_new").hide();
        $("#patient_add").show();
    });

    $(document).on("click","#patient_add",function() {
        $("#patient_edit").hide();
        $("#patient_new").show();
        $("#search_clients").val("")
    })
})