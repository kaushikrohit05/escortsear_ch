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
 ////////////// Category Sort id /////////////// 
  $(".category_sort").change(function()
  {
    value=$(this).val();
    id=$(this).attr('category_id'); 
     
    $.get("/admin/sortcategory/"+id+"/"+value, function(data, status)
    {              
    });
  });  


 ////////////// Location SLUG /////////////// 
  $("#location").change(function()
  {
    location_name=$(this).val();
    location_name=location_name.toLowerCase().trim();
    location_name=location_name.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
    // alert(location_name);
    $("#location_slug").val(location_name);
    //id=$(this).attr('category_id');  
  });  

 
////////////// Location featured ///////////////
  $('.location_featured').on('change', function()
  {    
    id=$(this).attr('location_id'); 
    if($(this).prop('checked') === true)
    {
      alert(id+'checcked');
      value=1;
      $.get("/admin/featured_location/"+id+"/"+value, function(data, status){});
    }
    else
    {
      value=0;
      $.get("/admin/featured_location/"+id+"/"+value, function(data, status){});
    }
  });

  ////////////// Location Sort id /////////////// 
  $(".location_sort").change(function()
  {
    value=$(this).val();
    id=$(this).attr('location_id');      
    $.get("/admin/sortlocation/"+id+"/"+value, function(data, status){ });
  });  



});
 