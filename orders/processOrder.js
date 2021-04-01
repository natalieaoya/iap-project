$('.btn').click(function(e){
    $("#order").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processOrder.php',
            data: $(this).serialize(),
            success: function(){ 
               alert("Success");
            }
        });
    });
});