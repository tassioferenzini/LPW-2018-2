<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 03/01/2018
 * Time: 16:52
 */

for($i=0,$j=50; $i<100; $i++) {
    while($j--) {
        if($j==17) goto end;
    }
}
echo "i = $i";
end:
echo 'j hit 17';
?>