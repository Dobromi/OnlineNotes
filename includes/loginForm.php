
<form method="post" id="loginForm">



    <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">

                    <button class="close" data-dismiss="modal">&times</button>
                    <h4 id="myModalLabel">Login!</h4>
                </div>


                <div class="modal-body">

                    <div id="loginformmessage">



                    </div>


                    <div class="form-group">

                        <input type="email" class="form-control" id="lemail" placeholder="Email" name="lemail">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="lpassword" placeholder="Password" name="lpassword">
                    </div>


                </div>
                <div class="checkbox" >
                    <label>
                        <input type="checkbox" name="rememberme" id="rememberme" >
                        Remember me
                    </label>
                    <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-toggle="modal" data-target="#forgotpassModel">
                        Forgot Password?
                    </a>

                </div>

                <div class="modal-footer">

                    <input class="btn green" name="login" type="submit" value="Login">

                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                    </button>


                </div>



            </div>




        </div>



    </div>


</form>

