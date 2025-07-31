$(document).ready(function(){

    // Verificando se a atual palavra-passe está correcta ou não!
    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        console.log(current_pwd);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
                type: 'post',
                url: '/admin/verify-password',
                data: {current_pwd:current_pwd},
                success:function(resp){
                    if (resp == "false") {
                        $("#verifyPwd").html("<font color='red'>A atual palavra-passe está errada!</font>");
                    } else if (resp == "true") {
                        $("#verifyPwd").html("<font color='green'>A atual palavra-passe está correcta!</font>");
                    }
                },
                error:function() {
                    alert("Error");
                }
        });
    });
});