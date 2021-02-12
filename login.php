<?php  
    include 'loginHeader.php';
    session_status();
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2" style="margin-top: 5rem;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6  rounded  row rounded ">
                        <div class="col-xl-12 col-sm-12 rounded d-md-none d-lg-block Register" id="divCostumMax" >
                            <div class="row position-relative rounded d-flex justify-content-center align-items-center">
                            
                            <img src="asset/images/r.gif" id="divCostumMax" class="ImgHold" style="width:100%; filter: brightness(50%);">
                            <div style="position: absolute;"> 
                                    <p style=" transform: scale(1, 2); color: white; letter-spacing: .5rem; line-height: 1rem; text: 1px 1px 5px rgba(0,0,0,0.5);    font-weight: 200;">
                                    <span class="costumColor">< </span><i> Click Here <span class="costumColor">to Join </span>
                                    </p>
                                    <p class="ml-4" style=" transform: scale(1, 2); color: white; letter-spacing: .5rem; line-height: 1rem; text: 1px 1px 5px rgba(0,0,0,0.5);    font-weight: 200;">
                                     &nbsp; SCRUM. <span class="costumColor">IO</i> </span>/>
                                    </p>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-6 bgWhite rounded">
                            <div class="mt-5 ml-2" style="font-stretch: expanded;">
                                <h4>Sign In</h4>
                                <form class="form-group mt-4">
                                    <input type="text" class="username formLogin mt-3" name="username" id="username" placeholder="Username">
                                    <input type="password" class="password formLogin mt-3" name="password" id="password" placeholder="Password">
                                    <button type="button" class="btnCustom formLogin mt-4 submit buttonProceed">C O N T I N U E</button>
                                </form>
                                <div class="desc-container d-flex justify-content-center">
                                    <p class="mt-4 mb-5">Visit us on:</p>
                                </div>
                                <div class="twitter-hander mb-3">
                                    <button class="btnHolder formLogin buttonTwitter"><i class="fab fa-twitter float-left ml-4 mt-1"></i> Check us on Twitter</button>
                                </div>
                                <div class="facebook-handler mb-5">
                                    <button class="btnHolder formLogin buttonFacebook"><i class="fab fa-facebook float-left ml-4 mt-1"></i>Check us on Facebook</button>  
                                </div>
                                <div class="footer-holder">
                                    <p class="float-right font-weight-light mt-5">© Rara Zaragoza 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once('regModal.php');
    require_once('footer.php');
?>
<script src="asset/js/loginscript.js"></script>