<!DOCTYPE html>  
<html>  
 <head>  
  <title>Administration</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  
  <br /><br />  
  <div class="container" style="width:900px;">  
   <h3 align="center">Sam Carrelage | Administration</h3>  
   <br />
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success">Ajouter</button>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                    <a class="nav-link active" href="index.php">Faience</a>
                <li class="nav-item">
                    <a class="nav-link" href="index_mosaique.php">Mosaique</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="index_piscine.php">Piscine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_sdbain.php">Salle de Bain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_solint.php">Sol Intérieur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_solext.php">Sol Extérieur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_collejoints.php">Colle et Joints</a>
                </li>
            </li> 
        </ul>
              
   </div>
   
   <br />
   <div id="image_data">

   </div>
  </div>  
 </body>  
</html>
<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Ajouter Image</h4>
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Selectioner Image</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <p><label>Prix</label><br>
		<input type="number"   name="prix" id="prix"/> 
        <span> €</span><br><br>
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
   </div>
  </div>
 </div>
</div>
 
<script> 


$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
    $('#prix_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#prix').val('Insert');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });

 $('#image_form').submit(function(event)
 {
  event.preventDefault();
  var prix =$('#prix').val();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Veuillez selectionner une image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
   $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Changer Image");
  $('#prix').val("insert")
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Etes-vous vraiment sur de vouloir supprimer cet article"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>
