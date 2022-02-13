$(document).ready(function(){

    $("#region").change(function()
    {
      parentid=$(this).val();
      $.get("/admin/getlocations/"+parentid, function(data, status)
      {
          $('#location').empty();
          if(data.length>0)
          {
              $.each( data, function( key, value )
              {
                  $("#location").append('<option value='+value['id']+'>'+value['location']+'</option>');
              });
              }
          else
          {
              $("#location").append('<option>No Location</option>');
  
          }
      });
    });
  
       
  });
   