<?php
include('../db.php');
if(isset($_POST["action"]))
{
  
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM sol_interieur ORDER BY id DESC"; //LIMIT 10
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="70%">Prix</th>
     <th width="10%">Modifer</th>
     <th width="10%">Supprimer</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="../'.($row['url_sol_int'] ).'" class="img-thumbnail" height="60" width="75"/> 
     </td>
     <td> ' .$row['prix_sol_int'].'</td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Modifer</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Supprimer</button></td>
    </tr>
   '; 
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
  {
    //insert form image qui contient l'image et le prix   
    //insert de l'image
    if(isset($_FILES["image"]["type"]))
    {
        $validextensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["image"]["name"]);
        $file_extension = end($temporary);
        if ((($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg")
        ) && ($_FILES["image"]["size"] < 2000000)//Approx. 2000kb files can be uploaded.
        && in_array($file_extension, $validextensions)) {
        if ($_FILES["image"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["image"]["error"] . "<br/><br/>";
        }
        else
        {
        if (file_exists("../images/carrelage/sol_interieur" . $_FILES["image"]["name"])) {
        echo $_FILES["image"]["name"] . "  ! Erreur ! Cette image Existe déjà ! ";
        }
        else
        {
        $sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
        $targetPath = "../images/carrelage/sol_interieur".$_FILES['image']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
        

        //adresse de l'image à inscrire en bdd
        $doc = "/images/carrelage/sol_interieur" . ($_FILES['image']['name']);
        
        //insertion de la valeur du prix
        $prix = $_POST['prix'];

        $query = "INSERT INTO sol_interieur(url_sol_int, prix_sol_int) VALUES ('$doc' , '$prix')";
        if(mysqli_query($connect, $query))
        {
        echo 'Image et prix Inserted into Database';
        }
        }
    }
    }
    else
    {
    echo "<span id='invalid'>***Invalid file Size or Type***<span>";
    }
    }
    
    
    
    }
    if($_POST["action"] == "update")
    {
      //update prix 
      $prix = ($_POST['prix']);
      
      
      //update image
      //reinsert de l'image
      if(isset($_FILES["image"]["type"]))
      {
        
        $query = "SELECT url_sol_int FROM sol_interieur WHERE id = '".$_POST["image_id"]."'" ;
        $result = mysqli_query($connect, $query);
          while ($row = $result->fetch_assoc())
          {
          $row['url_sol_int']."";
           unlink(".." .$row['url_sol_int']."");
          }
               
        
        $validextensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["image"]["name"]);
        $file_extension = end($temporary);
        if ((($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg")
        ) && ($_FILES["image"]["size"] < 2000000)//Approx. 2000kb files can be uploaded.
        && in_array($file_extension, $validextensions)) 
        {
        if ($_FILES["image"]["error"] > 0)
          {
          echo "Return Code: " . $_FILES["image"]["error"] . "<br/><br/>";
          }
          else
          { 
                
          if (file_exists("../images/carrelage/sol_interieur" . $_FILES["image"]["name"])) 
          {
          echo $_FILES["image"]["name"] . "  ! Erreur ! Cette image Existe déjà ! ";
          }
          else
          {
          $sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
          $targetPath = "../images/carrelage/sol_interieur".$_FILES['image']['name']; // Target path where file is to be stored
          move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
          
          //adresse de l'image à reinscrire en bdd
          $updatedoc = "/images/carrelage/sol_interieur" . ($_FILES['image']['name']);               
          $query = "UPDATE sol_interieur SET prix_sol_int = '$prix' , url_sol_int = '$updatedoc' WHERE id = '".$_POST['image_id']."'";
          if(mysqli_query($connect, $query))
          {
          echo 'Image et Prix Updated into Database';
          }
        }
       
      }
      // else
      // {
      // echo "<span id='invalid'>***Invalid file Size or Type***<span>";
      }}}
      
      //FIN UPDATE IMAGE
    }
    if($_POST["action"] == "delete")
    {
      //enlever le fichier du repertoire
      $query = "SELECT url_sol_int FROM sol_interieur WHERE id = '".$_POST["image_id"]."'" ;
      $result = mysqli_query($connect, $query);
      while ($row = $result->fetch_assoc()) {
        unlink(".." .$row['url_sol_int']."");
      
      //enlever la photo de la base
      $query = "DELETE FROM sol_interieur WHERE id = '".$_POST["image_id"]."'";
      if(mysqli_query($connect, $query))
      {
      echo 'Image Deleted from Database';
      }
    }
    

 

    
}


?>