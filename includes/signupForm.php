


<form method="post" id="signupform">


    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">

                    <button class="close" data-dismiss="modal">&times</button>
                    <h4 id="myModalLabel">Sign Up today and start using our Online Notes App!</h4>
                </div>


                <div class="modal-body">

                    <div id="signupmessage">



                    </div>

                    <div class="form-group">
                        <label for="username" class="sr-only">Username:</label>
                        <input type="text" class="form-control" id="susername" placeholder="Username" name="susername">
                    </div>

                    <div class="form-group">

                        <input type="email" class="form-control" id="semail" placeholder="Email" name="semail">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="spassword" placeholder="Password" name="spassword">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="spassword2" placeholder="Repeat Password" name="spassword2">
                    </div>
                </div>

                <div class="modal-footer">

                <input class="btn green" name="signup" id="signupbutton" type="submit" value="Sign Up">

                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                    </button>
                </div>



            </div>




        </div>



    </div>

</form>