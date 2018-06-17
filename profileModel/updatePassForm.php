<form method="post" id="updatepassform">


    <div class="modal" id="updatePassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button class="close" data-dismiss="modal">&times</button>
                    <h4 id="myModalLabel">Edit password: </h4>

                </div>


                <div class="modal-body">

                    <div id="errorMessage"></div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password2">Repeat password:</label>
                        <input type="password" name="password2" id="password2" placeholder="Repeat password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">


                    <input type="submit" value="Update" id="submit" class="form-group btn green btn-lg">

                </div>

            </div>



        </div>


    </div>

</form>