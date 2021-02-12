$(document).ready(function(){
    // Handle On Click Event
    $(".submit").click(function(){
        // Declaration of Variables
        let username = $(".username").val();
        let password = $(".password").val();
        // Special Character Validation
        if (/^[a-zA-Z0-9- ]*$/.test(username) == false || /^[a-zA-Z0-9- ]*$/.test(password) == false) {
            toastr.error("Special character is not Allowed.", "Fatal Error:");
        } else {
            // Empty string Validation
            if($(".username").val() == "" && $(".password").val() == ""){
                toastr.error("It Seems that you did'nt input your Username and Password.", "Error:");
            } else {
                // Call Ajax if all validation are meet.
                $.ajax({
                    type: "POST",
                    data: {
                            username:username, 
                            password:password
                            },
                    url: "loginfunction.php",
                    dataType: "JSON", 
                    success: function(data){
                        if(data.Type == 2){
                            toastr.error("It seems your credentials is Mispelled", "Login Error:");
                        } else if (data.Type == 1) {
                            // Fetching Json data
                            let access = data.Access;
                            // Redirecting user based on their Access Types.
                            switch(access) {
                                case "User":
                                    window.location.href = 'user/index.php';
                                break;
                                case "Member":
                                    window.location.href = 'member/index.php';
                                break;
                                case "Group Leader":
                                    window.location.href = 'master/index.php';
                                break;
                                case "Admin":
                                    window.location.href = 'admin/index.php';
                                break;
                                case "Superadmin":
                                    window.location.href = 'superadmin/index.php';
                                break;
                                default:
                                    window.location.href = 'index.php';
                            }
                        }
                    }
                });
            }
        }
    });
    // Modal Configuration
    $(".credentialDetails").hide();
    $('.Register').mouseenter(function(){
        $(this).css('cursor', 'pointer');
        $('.Register').on("click", function(){
            $('#registrationModal').modal('show')
        });
    });
    $(".Proceed").click(function(){
        $(".initialDetails").hide();
        $(".credentialDetails").show();
    });
    $(".return").click(function(){
        $(".credentialDetails").hide();
        $(".initialDetails").show();
    });
    // Handle onclick submit
    $(".regsubmit").click(function() {
        // variable declaration
        let name = $(".name").val();
        let nickname = $(".nickname").val();
        let age = $(".age").val();
        let address = $(".address").val();
        let usernameReg = $(".usernameReg").val();
        let passwordReg = $(".passwordReg").val();
        // Validate if all text form has value
        if(name == "" || nickname == "" || age == "" || address == "" || usernameReg == "" || passwordReg == ""){
            toastr.error("Please fill up the form.", "Fatal Error:");
        } else {
            // validate if there is an exising special character on the input
            if (/^[a-zA-Z0-9- ]*$/.test(name) == false || /^[a-zA-Z0-9- ]*$/.test(nickname) == false || /^[a-zA-Z0-9- ]*$/.test(usernameReg) == false || /^[a-zA-Z0-9- ]*$/.test(passwordReg) == false) {
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

    