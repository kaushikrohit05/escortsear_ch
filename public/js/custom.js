$(document).ready(function(){

    $("#region").change(function()
    {
      alert('sadsa');
      parentid=$(this).val();
      $.get("/admin/getlocations/"+parentid, function(data, status)
      {
          $('#location').empty();
          if(data.length>0)
          {
            $("#location").append('<option value=0>All Locations</option>');
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
   