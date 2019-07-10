// Add Record
function addactor() {
    // get values
    var name = $("#name").val();
    var sex = $("#sex").val();
    var dob = $("#dob").val();
var bio = $("#bio").val();

    // Add record
    $.post("addactor.php", {
       name: name,
        sex: sex,
        dob: dob,
        bio: bio
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#name").val("");
        $("#sex").val(""); 
       $("#dob").val("");
        $("#bio").val("");
    });
}

