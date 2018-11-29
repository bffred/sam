<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "samcarrecmsam");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM piscine ORDER BY id DESC"; //LIMIT 10
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="70%">Prix</th>
     <th width="10%">Change</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="../'.($row['url_piscine'] ).'" class="img-thumbnail" height="60" width="75"/> 
     </td>
     <td> ' .$row['prix_piscine'].'</td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
  {
//   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//   $query = "INSERT INTO piscine(url_piscine) VALUES ('$file')";
//   if(mysqli_query($connect, $query))
//   {
//    echo 'Image Inserted into Database';
//   }
//  
    if(isset($_FILES["image"]["type"]))
    {
        $validextensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["image"]["name"]);
        $file_extension = end($temporary);
        if ((($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg")
        ) && ($_FILES["image"]["size"] < 100000)//Approx. 100kb files can be uploaded.
        && in_array($file_extension, $validextensions)) {
        if ($_FILES["image"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["image"]["error"] . "<br/><br/>";
        }
        else
        {
        if (file_exists("../images/piscine/" . $_FILES["image"]["name"])) {
        echo $_FILES["image"]["name"] . "  ! Erreur ! Cette image Existe déjà ! ";
        }
        else
        {
        $sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
        $targetPath = "../images/piscine/".$_FILES['image']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
        // echo "<span id='success'>Image Bien Envoyée...!!</span><br/>";
        // echo "<br/><b>File Name:</b> " . $_FILES["image"]["name"] . "<br>";
        // echo "<b>Type:</b> " . $_FILES["image"]["type"] . "<br>";
        // echo "<b>Size:</b> " . ($_FILES["image"]["size"] / 1024) . " kB<br>";
        // echo "<b>Temp file:</b> " . $_FILES["image"]["tmp_name"] . "<br>";

            $doc = "/images/piscine/" . ($_FILES['image']['name']);

                
                
                
                            
        //$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
                //mysqli_select_db($connect, $query) or die("Could not select the databse." .mysqli_error());
                
                $query = "INSERT INTO piscine(url_piscine) VALUES ('$doc')";
                if(mysqli_query($connect, $query))
                //   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                //   $query = "INSERT INTO piscine(url_piscine) VALUES ('$file')";
                //   if(mysqli_query($connect, $query))
                {
                echo 'Image Inserted into Database';
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
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $query = "UPDATE piscine SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
      if(mysqli_query($connect, $query))
      {
      echo 'Image Updated into Database';
      }
    }
    if($_POST["action"] == "delete")
    {
      $query = "DELETE FROM piscine WHERE id = '".$_POST["image_id"]."'";
      if(mysqli_query($connect, $query))
      {
      echo 'Image Deleted from Database';
      }









    }
}
?>