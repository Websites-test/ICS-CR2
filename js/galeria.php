<?php
              function valia_imagen($imagen){
                $rdo = 0;

                if (ereg("[Jj][Pp][Gg]",$imagen)) $rdo = 1;
                if (ereg("[Gg][Ii][Ff]",$imagen)) $rdo = 1;
                if (ereg("[Pp][Nn][Gg]",$imagen)) $rdo = 1;
                if (ereg("[Bb][Mm][Pp]",$imagen)) $rdo = 1;

                return $rdo;
              }
               
               $puntero = opendir("img/productos/cajas");
               $img = 1;

               while(false!==($imagenes=readdir($puntero))){
                  if($imagenes!= "." && $imagenes != ".."){
                    if($img < 10){
                        echo "<div class = 'col-md-4'>";
                        echo "<img src = 'img/productos/cajas/$imagenes' width = '100%'</img>";
                        echo "</div>";
                    }
                    $img++;
                  }
               }
               closedir($puntero);
              ?>