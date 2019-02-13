<?php
                    $result=mysqli_query($dbc,$query);
                    $row=mysqli_fetch_assoc($result);
                    
                    echo'<div class="image">';
                    echo'<img src=" img/'.$row['pic1'].' " >';
                    echo'</div>';
                    
                    echo'<div class="mini-gallery">
                            <div class="small-image" onClick="changeImage('.$i++.')"><img src=" img/'.$row['pic1'].' " ></div>
                            <div class="small-image" onClick="changeImage('.$i++.')"><img src=" img/'.$row['pic2'].' " ></div>
                            <div class="small-image" onClick="changeImage('.$i++.')"><img src=" img/'.$row['pic3'].' " ></div>
                        </div>
                        <div class="straight-line"></div> ';
                    array_push($images, $row['pic1'], $row['pic2'], $row['pic3']);
                    
                    
                    echo '<div class="main-info-box">
                            <h3>'.$row['display'].'</h3>
                            <p>Ekran</p>
                        </div>';
                    echo '<div class="main-info-box">
                            <p>Aparat główny</p>
                            <h3>'.$row['camera_back_1'].'</h3>
                            <h3>'.$row['camera_back_2'].'</h3>
                            <h3>'.$row['camera_back_3'].'</h3>
                            <h3>'.$row['camera_back_4'].'</h3>                          
                        </div>';
                    echo '<div class="main-info-box">
                            <p>Aparat przedni</p>
                            <h3>'.$row['camera_front_1'].'</h3>
                            <h3>'.$row['camera_front_2'].'</h3>
                            <h3>'.$row['camera_front_3'].'</h3>                       
                        </div>';
                    echo '<div class="main-info-box">                          
                            <p>Odblokowanie</p>
                            <h3>'.$row['unlock_1'].'</h3>
                            <h3>'.$row['unlock_2'].'</h3>
                            <h3>'.$row['unlock_3'].'</h3>
                        </div>';
                    echo '<div class="main-info-box"> 
                            <p>Procesor</p>
                            <h3>'.$row['chip'].'</h3>
                        </div>';
                    echo '<div class="main-info-box"> 
                            <p>RAM</p>
                            <h3>'.$row['ram'].'</h3>
                        </div>';
                    echo '<div class="main-info-box">                                               
                            <h3>'.$row['waterproof'].'</h3>
                            <p>'.$row['waterproof_desc'].'</p>
                        </div>';
                    echo '<div class="main-info-box">                                               
                            <h3>'.$row['wireless_charging'].'</h3>
                            <p>Bezprzewodowe ładowanie</p>
                        </div>';
                    
                   // echo '<div class="straight-line"></div>';
                    
                                     
                    echo '<div class="info-box three-rows">';
                            if($i==4){ echo '<h4>Pamięć</h4>';}else{ echo'<h4 class="empty-h4">Pamięć</h4>';}
                    echo'   <p>'.$row['memory_1'].'</p>
                            <p>'.$row['memory_2'].'</p>
                            <p>'.$row['memory_3'].'</p>
                        </div>';
                                     
                    echo '<div class="info-box three-rows">';
                            if($i==4){ echo '<h4>Ekran</h4>';} else{ echo'<h4 class="empty-h4">Ekran</h4>';}
                    echo'   <p>'.$row['display_spec_1'].'</p>
                            <p>'.$row['display_spec_2'].'</p>
                            <p>'.$row['display_spec_3'].'</p>
                        </div>';
                                      
                    echo '<div class="info-box four-rows">';
                            if($i==4){ echo '<h4>Procesor</h4>';} else{ echo'<h4 class="empty-h4">Procesor</h4>';}
                    echo '  <p>'.$row['chip_spec_1'].'</p>
                            <p>'.$row['chip_spec_2'].'</p>
                            <p>'.$row['chip_spec_3'].'</p>
                            <p>'.$row['chip_spec_4'].'</p>
                        </div>';
                                       
                    echo '<div class="info-box three-rows">';
                            if($i==4){ echo '<h4>Wymiary</h4>';} else{ echo'<h4 class="empty-h4">Wymiary</h4>';}
                    echo '  <p>'.$row['size'].'</p>
                            <p>'.$row['weight'].'</p>
                        </div>';
                                       
                    echo '<div class="info-box three-rows">';
                            if($i==4){ echo '<h4>Bateria</h4>';} else{ echo'<h4 class="empty-h4">Bateria</h4>';}
                    echo '  <p>'.$row['battery'].'</p>
                        </div>';
                                       
                    echo '<div class="info-box three-rows">';
                            if($i==4){ echo '<h4>Karta SIM</h4>';} else{ echo'<h4 class="empty-h4">Karta SIM</h4>';}
                    echo'   <p>'.$row['sim'].'</p>
                        </div>';
                            
                    echo '<div class="info-box three-rows">';
                            if($i==4){ echo '<h4>Premiera</h4>';} else{ echo'<h4 class="empty-h4">Premiera</h4>';}
                    echo'   <p>'.$row['premiere'].'</p>
                        </div>';             
        
                    echo '</article>';