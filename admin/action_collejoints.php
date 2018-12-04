<?php
if(isset($_POST["action"]))
{
  //$connect = mysqli_connect("samcarrecmsam.mysql.db", "samcarrecmsam", "4Carrelage", "samcarrecmsam");
  $connect = mysqli_connect("localhost", "root", "", "samcarrecmsam");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM collejoints ORDER BY id DESC"; //LIMIT 10
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="70%">Prix</th>
     <th width="10%">Modifier</th>
     <th width="10%">Supprimer</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="../'.($row['url_collejoints'] ).'" class="img-thumbnail" height="60" width="75"/> 
     </td>
     <td> ' .$row['prix_collejoints'].'</td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button></td>
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
        if (file_exists("../images/collejoints" . $_FILES["image"]["name"])) {
        echo $_FILES["image"]["name"] . "  ! Erreur ! Cette image Existe déjà ! ";
        }
        else
        {
        $sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
        $targetPath = "../images/collejoints".$_FILES['image']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
        

        //adresse de l'image à inscrire en bdd
        $doc = "/images/collejoints" . ($_FILES['image']['name']);
        
        //insertion de la valeur du prix
        $prix = $_POST['prix'];

        $query = "INSERT INTO collejoints(url_collejoints, prix_collejoints) VALUES ('$doc' , '$prix')";
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
        
        $query = "SELECT url_collejoints FROM collejoints WHERE id = '".$_POST["image_id"]."'" ;
        $result = mysqli_query($connect, $query);
          while ($row = $result->fetch_assoc())
          {
          $row['url_collejoints']."";
           unlink(".." .$row['url_collejoints']."");
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
                
          if (file_exists("../images/collejoints" . $_FILES["image"]["name"])) 
          {
          echo $_FILES["image"]["name"] . "  ! Erreur ! Cette image Existe déjà ! ";
          }
          else
          {
          $sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
          $targetPath = "../images/collejoints".$_FILES['image']['name']; // Target path where file is to be stored
          move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
          
          //adresse de l'image à reinscrire en bdd
          $updatedoc = "/images/collejoints" . ($_FILES['image']['name']);               
          $query = "UPDATE collejoints SET prix_collejoints = '$prix' , url_collejoints = '$updatedoc' WHERE id = '".$_POST['image_id']."'";
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
      $query = "SELECT url_collejoints FROM collejoints WHERE id = '".$_POST["image_id"]."'" ;
      $result = mysqli_query($connect, $query);
      while ($row = $result->fetch_assoc()) {
        unlink(".." .$row['url_collejoints']."");
      
      //enlever la photo de la base
      $query = "DELETE FROM collejoints WHERE id = '".$_POST["image_id"]."'";
      if(mysqli_query($connect, $query))
      {
      echo 'Image Deleted from Database';
      }
    }
    

 

    
}


?>