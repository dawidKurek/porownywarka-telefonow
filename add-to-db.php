<?php

  $username = 'dawid_kurek';
  $password = '010dk';

  if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)) {

    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Gitarowe wojny"');
    exit('<h2>Gitarowe wojny</h2>Musisz wprowadzić prawidłową parę ' .
      'nazwa użytkownika - hasło, aby uzyskać dostęp do tej strony.');
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-add-to-db.css">
    <title></title>
</head>

<body>
<main>
<?php    
    require_once"connect.php";
   
if(isset($_POST['submit'])){  
    
    $brand=$_POST['brand'];
    $type=$_POST['type'];
    $display=$_POST['display'];
    $camera_back_1=$_POST['camera_back_1'];
    $camera_back_2=$_POST['camera_back_2'];
    $camera_back_3=$_POST['camera_back_3'];
    $camera_back_4=$_POST['camera_back_4'];    
    $camera_front_1=$_POST['camera_front_1'];
    $camera_front_2=$_POST['camera_front_2'];
    $camera_front_3=$_POST['camera_front_3'];  
    $unlock_1=$_POST['unlock_1'];
    $unlock_2=$_POST['unlock_2'];
    $unlock_3=$_POST['unlock_3'];
    $chip=$_POST['chip'];
    $ram=$_POST['ram'];
    $waterproof=$_POST['waterproof'];
    $waterproof_desc=$_POST['waterproof_desc'];
    $wireless_charging=$_POST['wireless_charging'];
    $memory_1=$_POST['memory_1'];
    $memory_2=$_POST['memory_2'];
    $memory_3=$_POST['memory_3'];
    $display_spec_1=$_POST['display_spec_1'];
    $display_spec_2=$_POST['display_spec_2'];
    $display_spec_3=$_POST['display_spec_3'];
    $chip_spec_1=$_POST['chip_spec_1'];
    $chip_spec_2=$_POST['chip_spec_2'];
    $chip_spec_3=$_POST['chip_spec_3'];
    $chip_spec_4=$_POST['chip_spec_4'];
    $size=$_POST['size'];
    $weight=$_POST['weight'];
    $battery=$_POST['battery'];
    $sim=$_POST['sim'];
    $premiere=$_POST['premiere'];
    
    $pic1=$_FILES['pic1']['name'];
    $pic2=$_FILES['pic2']['name'];
    $pic3=$_FILES['pic3']['name'];
    
    $pic1_name=time()."$pic1";
    $pic2_name=time()."$pic2";
    $pic3_name=time()."$pic3";
    
    $pic1_tmp_name=$_FILES['pic1']['tmp_name'];
    $pic2_tmp_name=$_FILES['pic2']['tmp_name'];
    $pic3_tmp_name=$_FILES['pic3']['tmp_name'];
    $target='img/';
  
    
    if(empty($brand) || empty($type) || empty($display) || empty($camera_back_1) || empty($camera_front_1) || empty($unlock_1) || empty($chip) || empty($ram) || empty($waterproof) || empty($waterproof_desc) || empty($wireless_charging) || empty($memory_1) || empty($display_spec_1) || empty($chip_spec_1) || empty($size) || empty($weight) || empty($battery) || empty($sim) || empty($premiere)){
        $error_msg='Uzupełnij wszystkie obowiązkowe pola!';
    }else{
        $query="SELECT * FROM brand WHERE brand='$brand' ";
        $result=mysqli_query($dbc,$query);
        
        if(mysqli_num_rows($result)>0){
                //Podana marka już istnieje         
            $row=mysqli_fetch_assoc($result);

            $query2="SELECT * FROM type WHERE type='$type' AND id_brand='".$row['id_brand']."' ";
            $result2=mysqli_query($dbc,$query2);
            
                if(mysqli_num_rows($result2)>0){
                    //Podana model już istnieje
                    $error_msg='Podany model już istnieje!';
                }else{
                    $query2="INSERT INTO type (id_brand, type) VALUES ('".$row['id_brand']."', '$type')";
                    $result2=mysqli_query($dbc, $query2);

                    $query="SELECT * FROM type WHERE type='$type' AND id_brand='".$row['id_brand']."' ";
                    $result=mysqli_query($dbc, $query);
                    $row=mysqli_fetch_assoc($result);

                    include"insert-into-spec.php";

                    $reult2=mysqli_query($dbc, $query2);

                    move_uploaded_file($pic1_tmp_name, $target.$pic1_name);
                    move_uploaded_file($pic2_tmp_name, $target.$pic2_name);
                    move_uploaded_file($pic3_tmp_name, $target.$pic3_name);
                }
            
            
        }else{
            //Podana marka nie istnieje
            
        $query="INSERT INTO brand (brand) VALUES ('$brand') ";
        $result=mysqli_query($dbc, $query);
        
        $query="SELECT * FROM brand WHERE brand='$brand' ";
        $result=mysqli_query($dbc, $query);
        $row=mysqli_fetch_assoc($result);
        
        $query2="INSERT INTO type (id_brand, type) VALUES ('".$row['id_brand']."', '$type')";
        $result2=mysqli_query($dbc, $query2);
        
        $query="SELECT * FROM type WHERE type='$type' AND id_brand='".$row['id_brand']."' ";
        $result=mysqli_query($dbc, $query);
        $row=mysqli_fetch_assoc($result);
        
        include"insert-into-spec.php";
        
        $reult2=mysqli_query($dbc, $query2);
        
        move_uploaded_file($pic1_tmp_name, $target.$pic1_name);
        move_uploaded_file($pic2_tmp_name, $target.$pic2_name);
        move_uploaded_file($pic3_tmp_name, $target.$pic3_name);
        }    
    }
    
}
?>

    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">    
         <div class="column">
            <input type="text" name="brand" placeholder="Marka">
            <input type="text" name="type" placeholder="Model">  
            <input type="text" name="display" placeholder="Ile cali?">
            <input type="text" name="camera_back_1" placeholder="Kamera z tyłu">
            <input type="text" name="camera_back_2" placeholder="Kamera z tyłu 2 (opcjonalnie)">
            <input type="text" name="camera_back_3" placeholder="Kamera z tyłu 3 (opcjonalnie)">
            <input type="text" name="camera_back_4" placeholder="Kamera z tyłu 4 (opcjonalnie)">
            <input type="text" name="camera_front_1" placeholder="Kamera z przodu">    
            <input type="text" name="camera_front_2" placeholder="Kamera z przodu 2 (opcjonalnie)">    
            <input type="text" name="camera_front_3" placeholder="Kamera z przodu 3 (opcjonalnie)">    
            <input type="text" name="unlock_1" placeholder="Metoda odblokowania (jak nie to '-')">
            <input type="text" name="unlock_2" placeholder="Metoda odblokowania 2 (opcjonalnie)">
            <input type="text" name="unlock_3" placeholder="Metoda odblokowania 3 (opcjonalnie)">
            <input type="text" name="chip" placeholder="Nazwa procesora">
            <input type="text" name="ram" placeholder="Ilość pamięci RAM">
            <input type="text" name="waterproof" placeholder="Klasa wodoodporności (jak nie to '-')">
            <input type="text" name="waterproof_desc" placeholder="Opis klasy wodoodporności">
            <input type="text" name="wireless_charging" placeholder="Ładowanie bezprzewodowe? standard : -">
         </div>
        <div class="column">
            <input class="type-file" type="file" name="pic1" value="pic1">
            <input class="type-file" type="file" name="pic2" value="pic2">
            <input class="type-file" type="file" name="pic3" value="pic3">
            <input type="text" name="memory_1" placeholder="Pamięć ROM">
            <input type="text" name="memory_2" placeholder="Pamięć ROM 2 (opcjonalnie)">
            <input type="text" name="memory_3" placeholder="Pamięć ROM 3 (opcjonalnie)">
            <input type="text" name="display_spec_1" placeholder="Ekran specyfikacja">
            <input type="text" name="display_spec_2" placeholder="Ekran specyfikacja 2 (opcjonalnie)">
            <input type="text" name="display_spec_3" placeholder="Ekran specyfikacja 3 (opcjonalnie)">
            <input type="text" name="chip_spec_1" placeholder="Procesor specyfikacja">
            <input type="text" name="chip_spec_2" placeholder="Procesor specyfikacja 2 (opcjonalnie)">
            <input type="text" name="chip_spec_3" placeholder="Procesor specyfikacja 3 (opcjonalnie)">
            <input type="text" name="chip_spec_4" placeholder="Procesor specyfikacja 4 (opcjonalnie)">
            <input type="text" name="size" placeholder="Wymiary (w/s/g mm)">
            <input type="text" name="weight" placeholder="Waga">
            <input type="text" name="battery" placeholder="Pojemność baterii">
            <input type="text" name="sim" placeholder="Standard SIM">
            <input type="text" name="premiere" placeholder="Premiera (kwartal, rok)">
                      
            <input type="submit" name="submit" class="submit" value="Zatwierdź">
            <div class="error_msg"><?=@$error_msg?></div>
        </div>  
    </form>
 
</main>   
</body>
</html>
