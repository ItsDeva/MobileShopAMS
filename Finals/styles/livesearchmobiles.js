$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetchmobiles.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
 $('#example tr').click(function() {
     var href = $(this).find("a").attr("href");
     if(href) {
         window.location = href;
     }
 });
});
