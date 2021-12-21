$(document).ready(function() {
    $('#peran').on('change', function() {
       var peranID = $(this).val();
       if(peranID) {
           $.ajax({
               url: '/getbdetailperan/'+peranID,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                    $('#id_peran').empty();
                    $('#id_peran').append('<option hidden>Peran</option>'); 
                    $.each(data, function(key, value){
                        $('select[name="id_peran"]').append('<option value="'+ value +'">' + value + '</option>');
                    });
                }else{
                    $('#id_peran').empty();
                }
             }
           });
       }else{
         $('#id_peran').empty();
       }
    });
});