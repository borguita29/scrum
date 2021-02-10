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
});

    