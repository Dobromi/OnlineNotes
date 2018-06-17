/**
 * Created by X on 13.6.2018 г..
 */

$("#signupform").submit(function (event) {
    event.preventDefault();
    console.log("submitedasdasa");
    var datatopost=$(this).serializeArray();

    $.ajax({

        url : "validation/signup.php",
        type: "POST",
        data: datatopost,
        success: function (data) {
            console.log(data);
            if(data){
                $("#signupmessage").html(data);
            }

        },
        error: function () {
            console.log("here");
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the ajax call</div>");
        } 
    });

});

$("#loginForm").submit(function (event) {



    event.preventDefault();
    var datatopost=$(this).serializeArray();

    console.log(datatopost);
    $.ajax({

        url: "validation/login.php",
        type: "POST",
        data: datatopost,
        success: function (data) {
            console.log(data);
            if(data=="success"){
                console.log("bullshit");
                window.location="mainPage.php";
            }else{
                console.log("here");
                $("#loginformmessage").html(data);
            }
        },
        error:function () {
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the ajax call</div>");

        }
    });
});