<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 03/01/2018
 * Time: 16:40
 */

for ($i = 0; $i < 100; $i++) {
    if ($i % 2) continue;
    echo "$i";
}