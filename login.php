<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SCRUM.IO</title>
        <link rel="stylesheet" href="Asset/bootstrap/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="Asset/css/general.css"></link>
        <link rel="stylesheet" href="toastr/toastr.css"></link>
        <script src="Asset/bootstrap/js/jquery.js"></script>
        <script src="Asset/bootstrap/js/popper.min.js"></script>
        <script src="Asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="toastr/toastr.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">                   
                <div class="col-xl-3" >
                    <form class="form-group ">
                        <input class="form-control mb-2 username" type="text" name="username" id="username" placeholder="Username">
                        <input class="form-control mb-2 password" type="password" name="password" id="password" placeholder="Passcode">
                        <button class="btn btn-success mb-2 submit" type="button">Submit</button>      
                    </form>
                </div> 
            </div>
        </div>   
    </body>
</html>
<script>
    $(document).ready(function(){
        $(".submit").click(function(){
            if($(".username").val() == "" && $(".password").val() == ""){
                toastr.error("It Seems that you did'nt input your Username and Password.", "Error:");
            } else {
                let username = $(".username").val();
                let password = $(".password").val();

                $.ajax({
                    type: "POST",
                    data: {username:username, password:password},
                    url: "loginfunction.php",
                    dataType: "JSON", 
                    success: function(data){
                        if(data == 2){
                            toastr.error("It seems your credentials is Mispelled", "Login Error:");
                        } else if (data == 1) {
                            if (data == "User") {
                                window.location('http://localhost/scrumio/user/index.php');
                            } else if (data == "Member") {
                                
                            } else if (data == "Group Leader") {
                                
                            } else if (data == "Admin") {
                                
                            } else if (data == "Superadmin") {
                                
                            }
                        }
                    }
                });
            }
        });
    });
</script>