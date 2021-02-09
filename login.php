<?php  

include 'header.php';

?>

    <body>
        <div class="container mt-5 header">
        <div class="row">
            <div class="col-xl-4 offset-xl-4">
                <h1 class="pt-5 text-center loginTitle ">SCRUM.IO</h1>
                <hr></hr>
                <form class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control loginLabel username" name="username" placeholder="USERNAME">
                    </div>
                    <hr></hr>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i>
                        </div>
                        <input type="password" class="form-control loginLabel password" name="password" placeholder="PASSWORD">
                    </div>
                    <hr></hr>
                    <div>
                        <button type="button" class="submit col-xl-12 btn btn-secondary loginLabel mb-2">LOGIN</button>
                        <button class="col-xl-12  btn btn-secondary loginLabel" onclick="window.location = 'registration.php' ">REGISTER</button>
                    </div>
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
                        if(data.Type == 2){
                            toastr.error("It seems your credentials is Mispelled", "Login Error:");
                        } else if (data.Type == 1) {
                            
                            if (data.Access == "User") {
                                window.location.href = 'user/index.php';
                            } else if (data.Access == "Member") {
                                window.location.href = 'member/index.php';
                            } else if (data.Access == "Group Leader") {
                                window.location.href = 'master/index.php';
                            } else if (data.Access == "Admin") {
                                window.location.href = 'admin/index.php';
                            } else if (data.Access == "Superadmin") {
                                window.location.href = 'superadmin/index.php';
                            }
                        }
                    }
                });
            }
        });
    });
</script>
    