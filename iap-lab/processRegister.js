$('.btn').click(function(e){
    $("#signUp").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processRegister.php',
            data: new FormData(this),
            dataType: 'html',
            contentType: false,
            cache: false,
            processData:false,
            success: function(){ 
               window.location.href="/orders/main.php";
            }
        });
    });
});