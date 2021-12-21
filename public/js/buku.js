$(document).ready(function() {
    $('#buku').on('change', function() {
       var bukuID = $(this).val();
       if(bukuID) {
           $.ajax({
               url: '/getbab/'+bukuID,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                    $('#id_bab').empty();
                    $('#id_bab').append('<option hidden>Bab</option>'); 
                    $.each(data, function(key, value){
                        $('select[name="id_bab"]').append('<option value="'+ value +'">' + value + '</option>');
                    });
                }else{
                    $('#id_bab').empty();
                }
             }
           });
       }else{
         $('#id_bab').empty();
       }
    });
});