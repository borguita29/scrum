<?php  
    include 'header.php';
?>
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
                        <a href="registration.php" class="col-xl-12  btn btn-secondary loginLabel">REGISTER</a>
                    </div>
                </form>
            </div>
        </div>
    </div>  
<?php
    require_once('footer.php');
?>
<script src="asset/js/loginscript.js"></script>