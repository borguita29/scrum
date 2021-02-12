<!-- Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form class="form-group" id="regform">
                <div class="initialDetails col-xl-12">
                    <input type="text" class="formLogin mt-3 name" name="fname" placeholder="Name" required>
                    <input type="text" class="formLogin mt-3 nickname" name="nickname" placeholder="Nickname" required>
                    <input type="number" class="formLogin mt-3 age" name="age" placeholder="Age" required>
                    <select name="gender" id="gender" name="gender" class="formLogin mt-3" required>
                        <option value="MALE" default>MALE</option>
                        <option value="FEMALE" default>FEMALE</option>
                    </select>
                    
                    <input type="text" class="formLogin mt-3 address" name="address" placeholder="Address" required>
                    <input type="email" class="formLogin mt-3" name="email" placeholder="Email Address" required>
                </div>
                <div class="credentialDetails col-xl-12">
                    <input type="text" class="formLogin mt-3 usernameReg" name="username" placeholder="Username" required>
                    <input type="password" class="formLogin mt-3 passwordReg" name="password" placeholder="Password" required>
                    
                </div>	
            </form>
        </div>
      <div class="modal-footer">
                <div class="initialDetails">
                    <button type="button" class="btnCustom buttonProceed" id="buttonClose" data-dismiss="modal">C L O S E</button>
                    <button type="Button" class="btnCustom buttonProceed Proceed">P R O C E E D</button>
                </div>
                <div class="credentialDetails">
                    <button type="Button" class="btnCustom buttonProceed return">Return</button>
                    <button type="button" class="btnCustom buttonProceed regsubmit">Submit</button>
                </div>
                
        
      </div>
    </div>
  </div>
</div>