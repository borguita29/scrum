$(document).ready ( function() {
    $("#regsubmit").click ( function() {
        let name = $(".name").val();
        let nickname = $(".nickname").val();
        let age = $(".age").val();
        let address = $(".address").val();
        let username = $(".username").val();
        let password = $(".password").val();
        if(name == "" || nickname == "" || age == "" || address == "" || username == "" || password == ""){
            toastr.error("Please fill up the form.", "Fatal Error:");
        } else {
            if (/^[a-zA-Z0-9- ]*$/.test(name) == false || /^[a-zA-Z0-9- ]*$/.test(nickname) == false || /^[a-zA-Z0-9- ]*$/.test(username) == false || /^[a-zA-Z0-9- ]*$/.test(password) == false) {
                toastr.warning("Field must not contain any special character except the address.", "Minor Error:");
            } else {
                $.ajax({
                    type: "POST",
                    url: "registration_function.php",
                    dataType: "JSON",
                    data: $("#regform").serialize(),
                    success: function(data) {
                        var message = data.message;
                        var code = data.code;
                        switch (code) {
                            case 1:
                                toastr.warning(message, "Registration Error:");
                            break;
                            case 2:
                                toastr.warning(message, "Registration Error:");
                            break;
                            case 3:
                                toastr.success(message, "Registration Success:");
                                window.setTimeout(function() {
                                    window.location.href = 'login.php';
                                }, 1500);
                            break;
                        
                            default:
                            break;

                        } 
                        
                    }
                });
            }
        }
    });
});