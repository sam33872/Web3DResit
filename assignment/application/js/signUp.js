$(document).ready(function () {
    $("#signUpSubmit").click(function () {
        console.log("did this");
        postemail = $("#emailInput").val();
        postname = $("#nameInput").val();
        $.post("../assignment/application/view/signUp.php", { email: postemail, name: postname });
    });
});