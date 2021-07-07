 <?php

        function getPoem()
        {
            $content = file("shevchenko.txt");
            if ($content) {
                $tempSymbolArray = [];  
                foreach($content as $row) {
                    $tempRowSymbolArray = [];
                    $tempRowSymbolArray = preg_split('//u', $row, -1, PREG_SPLIT_NO_EMPTY);
                    array_push($tempSymbolArray, $tempRowSymbolArray);
                }
            }
            return $tempSymbolArray;
        }

        function show2dArrayRevers($array){
            //find longer row
            $maxLongRow = 0;
            foreach($array as $row) {
                if($maxLongRow < count($row)){
                    $maxLongRow = count($row);
                }
            }

            $countRow = $maxLongRow;
            $countCol =count($array) ;

            for($i = 0; $i < $countRow; $i++){
                for($j = 0; $j < $countCol; $j++){
                        if($array[$j][$i]===';'){
                            echo ';';
                        }
                        if(!$array[$j][$i] || $array[$j][$i] === ' ' || ord($array[$j][$i])===13 || ord($array[$j][$i])===10){
                            echo '&nbsp';  
                        }else{
                            echo $array[$j][$i]; 
                        }
                        echo '&nbsp'; 
                        echo '&nbsp'; 
                        echo '&nbsp';
                }
                echo "<br>";
            }

        }
?>
