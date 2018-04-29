<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

</header>

<section >
    
    
 
    
      <div class="card" style="margin-left:75%; width:25%;">
          <div class="card-body">
                <form class="form-signin" method="post" action="">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                           <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        
                      <a href="#" class="badge badge-success"> Forgot Password</a>
                            
                    </div>
                    <button class="btn btn-md btn-info " type="submit">Sign in</button>
                        <!-- Login Button-->
                    </form>
                
                <!--signin form-->
                
            <button class="btn btn-lg btn-info" id="resister" name="sign-in" data-target="#signupmodal" data-toggle="modal" >Resister </button>               
                        <!-- Button Signup poping up a Modal-->

                </div>
            <!-- Card Body-->
        
      <!-- Card in which the signup button is-->
      
</div>
    
    <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Resister with us</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              
                                  <form class="form-signup" method="post" >
                                     <div class="form-group">
                                      <div class="row">
                                          
                                          <div class="col">
                                              
                                                <label for="FName" class="sr-only">First Name </label>             
                                                <input class="form-control" type="text" name="FName" id="FName " required placeholder="First Name">
                                           </div>
                                          
                                          <div class="col">
                                                <label for="LName" class="sr-only">Last Name</label>
                                                <input class="form-control" type="text" name="LName" required placeholder="Last Name">
                                           </div>
                                         
                                          <div class="col">
                                            <label for="inputEmail" class="sr-only">Email address</label>
                                             <input type="email" id="inputEmailsingup" class="form-control" placeholder="Email address" required >
                                          </div>
                                          
                                      </div>
                                      <br/>
                                      <div class="row">
                                          <div class="col">
                                              <label class="sr-only" for="password">Password</label>
                                              <input class="form-control" id="passowrd" placeholder="Password" type="password" name="pass" required>
                                          </div>
                                          
                                          <div class="col">
                                              <label class="sr-only" for="Password_again"> Password </label>
                                                  <input class="form-control" name="Password_again" type="password" placeholder="Confrim Password" id="conf_password">
                                          </div>
                                           </div>  
                                      
                                          <br/>

                                      <button type="submit" class="btn btn-md btn-info" name="resister" >Resister </button>
                                            <!-- Resister Button-->
                                     </div>   
                                      </form>
                                 
                           <!-- signup/resister Form-->
                            
                          </div>
                        </div>
                      </div>
    </div>
      <!-- Sign-up Modal-->              
                    
               
</section>

     <script>
           
               $("#resister").click(function(){
                $("#signupmodal").modal({
                    backdrop:"static";
                });
            });
         
         </script>