<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "root", "samcarrecmsam");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM piscine ORDER BY id DESC"; //LIMIT 10
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%" class="text-center">ID</th>
     <th width="70%" class="text-center">Image</th>
     <th width="70%" class="text-center">Prix</th>
     <th width="10%" class="text-center">Modifier</th>
     <th width="10%" class="text-center">Supprimer</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td class="text-center">'.$row["id"].'</td>
     <td class="text-center">
      <img src="../'.($row['url_piscine'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td class="text-center"> ' .$row['prix_piscine'].'</td>
     <td class="text-center"><button type="button" name="update" class="btn btn-primary bt-xs update" id="'.$row["id"].'">Modifier</button></td>
     <td class="text-center"><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Supprimer</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO tbl_images(name) VALUES ('$file')";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Inserted into Database';
  }
 }
 if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE tbl_images SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM tbl_images WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>