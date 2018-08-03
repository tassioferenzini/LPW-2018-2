<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 22/01/2018
 * Time: 22:34
 */

require_once 'vendor/autoload.php';

$gravatar = new \emberlabs\gravatarlib\Gravatar();
$gravatar->setAvatarSize(50);
echo '<img src="' . $gravatar->buildGravatarURL('seu@email.com') . '" width="50" height="50">';