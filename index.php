<?php include"header.php"; ?>
<body>
    <header>      
        <h1>Porównaj modele</h1>
        <div class="select-bar">
            <h2>Model</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
                <div class="selects">
                    <?php include'create-selects.php'; ?>
                </div>
                <input type="submit" class="submit" name="submit" value="PORÓWNAJ">    
            </form>
        </div>
    </header> 
    
    <main>
        <section>
            <?php
            
            if(!isset($_POST['submit'])){
                $images=array();
                $i=1;
                foreach($default_brand_values as $default_value){
                
                    echo '<article>';
                    
                    $query="SELECT * FROM spec WHERE id_type='$default_value' ";
                    include"article.php";            
        
                    echo '</article>';        
                }
                
            }else{
                $images=array();
                $i=1;
                foreach($brand_values as $value){
                    echo '<article>';
                    
                    $query="SELECT * FROM spec WHERE id_type='$value' ";
                    include"article.php";              
        
                    echo '</article>';                   
                }
            }
            ?>           
        </section>
    </main> 

</body>
<script>
    var array = <?php echo json_encode($images); ?>;
    var image = document.getElementsByClassName('image');
    var image_one = image[0];
    var image_two = image[1];
    var image_three = image[2];
    
    function changeImage(number){
        var imageNumber=number;
        
        switch (number){
            case 1:
                image_one.innerHTML='<img src="img/' +array[0]+ '">' ;
            break;
            case 2:
                image_one.innerHTML='<img src="img/' +array[1]+ '">' ;
            break;
            case 3:
                image_one.innerHTML='<img src="img/' +array[2]+ '">' ;
            break;
            case 4:
                image_two.innerHTML='<img src="img/' +array[3]+ '">' ;
            break;
            case 5:
                image_two.innerHTML='<img src="img/' +array[4]+ '">' ;
            break;
            case 6:
                image_two.innerHTML='<img src="img/' +array[5]+ '">' ;
            break;
            case 7:
                image_three.innerHTML='<img src="img/' +array[6]+ '">' ;
            break;
            case 8:
                image_three.innerHTML='<img src="img/' +array[7]+ '">' ;
            break;
            case 9:
                image_three.innerHTML='<img src="img/' +array[8]+ '">' ;
            break;
        }
    }
</script>
</html>
