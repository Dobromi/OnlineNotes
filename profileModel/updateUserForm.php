

<form method="post" id="updateusernameform">


    <div class="modal" id="updateUsername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button class="close" data-dismiss="modal">&times</button>
                    <h4 id="myModalLabel">Edit Username: </h4>

                </div>


                <div class="modal-body">

                    <div id="errorMessage"></div>
                    <div class="form-group">

                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username" placeholder="Edit Username" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">


                    <input type="submit" value="Update" id="submit" class="form-group btn green btn-lg">

                </div>
            </div>

        </div>


    </div>

</form>