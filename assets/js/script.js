$(document).on('submit' , '#frmAddOrders' , function(e){
e.preventDefault();

    $.ajax({
        type : 'POST',
        url  : 'saveorder.php',
        data : $('#frmAddOrders').serialize(),
        dataType : 'json',
        cache : false,

        beforeSend : function(){
        },
        complete : function(){
        },
        success : function(data){

            if(data.status){

                $('#myModal').modal('show');
                $('.modal-title').html(data.greet);
                $('#orders').html(data.message);
                $('#myModal').on('hidden.bs.modal', function () { 
                    window.location.reload(true);
                });

            }else{

                bootbox.alert(data.message);
            }

        },
        error : function(){
            bootbox.alert('<div class="text">Unable to connect to server.<div>');
        }
    
    });
             
    return false;
    
});