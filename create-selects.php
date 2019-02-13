<?php
$default_brand_values=array('brand_one'=>2,'brand_two'=>3,'brand_three'=>4); //id_type

if(!isset($_POST['submit'])){
        
    foreach($default_brand_values as $default_name => $default_value){
        $query="SELECT * FROM brand";
        $result=mysqli_query($dbc, $query);
    
        echo '<select name="'.$default_name.'">';
        while($row=mysqli_fetch_array($result)){        
            echo '<optgroup label="'.$row['brand'].'">';                                                          

            $query2="SELECT * FROM type WHERE id_brand='".$row['id_brand']."' ";
            $result2=mysqli_query($dbc,$query2);
            while($row2=mysqli_fetch_array($result2)){
                if($default_value==$row2['id_type']){
                    echo '<option value="'.$row2['id_type'].'" selected> '.$row2['type'].' </option>';  
                }else{
                    echo '<option value="'.$row2['id_type'].'"> '.$row2['type'].' </option>';  
                }
            }
            echo '</optgroup>';
        }

            echo '</select>';
    }
}else{
    $brand_values=array('brand_one'=>$_POST['brand_one'],'brand_two'=>$_POST['brand_two'],'brand_three'=>$_POST['brand_three']);
    
        foreach($brand_values as $brand_name => $brand_value){
            $query="SELECT * FROM brand";
            $result=mysqli_query($dbc, $query);

            echo '<select name="'.$brand_name.'">';
            while($row=mysqli_fetch_array($result)){        
                echo '<optgroup label="'.$row['brand'].'">';                                                          

                $query2="SELECT * FROM type WHERE id_brand='".$row['id_brand']."' ";
                $result2=mysqli_query($dbc,$query2);
                while($row2=mysqli_fetch_array($result2)){
                    if($brand_value==$row2['id_type']){
                        echo '<option value="'.$row2['id_type'].'" selected> '.$row2['type'].' </option>';  
                    }else{
                        echo '<option value="'.$row2['id_type'].'"> '.$row2['type'].' </option>';  
                    }
                }
                echo '</optgroup>';
            }

                echo '</select>';
    }
}


?>