$(document).ready(function() {
    $('#changePass').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processChangePass.php',
            data: $(this).serialize(),
            success:function(response){
                response=response.trim();
                switch (response) {
                    case "wp":
                        alert("The current password is wrong");
                        break;
                    case "su":
                        alert("Successful Update");
                        break;
                    default:
                        break;
                }
            }
        });
    });
});