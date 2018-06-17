

/**
 * Created by X on 17.6.2018 г..
 */

var written=0;
$("#addNote").click(function () {
    var visible=$("#notePad").css("display");
    $("#notes").toggle();
    console.log('togg');
    $("#notePad").toggle();

    if(written%2!=0){
        var text=$("#notetextarea").val();

        if(text.length>0){

            $.ajax({

                url : "validation/addNote.php",
                type: "POST",
                data: {key:text},
                success: function (data) {
                    console.log(data);
                },
                error: function () {
                    console.log("Error in ajax call");

                }
            });

            $.ajax({

                url : "validation/getNotes.php",
                type: "POST",
                success: function (data) {
                    $("#notes").html(data);
                },
                error: function () {
                    console.log("Error in ajax call");

                }
            });

        }

    }


    written++;
    $("#notetextarea").val('');
});