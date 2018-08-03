<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 05/01/2018
 * Time: 18:00
 */

//So funciona se desativar os erros!
ini_set('display_errors', 0);

include("mpdf/mpdf.php");

$html = '<h2>HTML TABLE:</h2>
<table border="1" cellspacing="3" cellpadding="4">
    <tr>
        <th>#</th>
        <th align="right">RIGHT align</th>
        <th align="left">LEFT align</th>
        <th>4A</th>
    </tr>
    <tr>
        <td>1</td>
        <td bgcolor="#cccccc" align="center" colspan="2">A1 ex<i>amp</i>le <a href="http://www.tcpdf.org">link</a> column span. One two tree four five six seven eight nine ten.<br />line after br<br /><small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal  bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<ol><li>first<ol><li>sublist</li><li>sublist</li></ol></li><li>second</li></ol><small color="#FF0000" bgcolor="#FFFF00">small small small small small small small small small small small small small small small small small small small small</small></td>
        <td>4B</td>
    </tr>
    <tr>
        <td>'.$subtable.'</td>
        <td bgcolor="#0000FF" color="yellow" align="center">A2 € &euro; &#8364; &amp; è &egrave;<br/>A2 € &euro; &#8364; &amp; è &egrave;</td>
        <td bgcolor="#FFFF00" align="left"><font color="#FF0000">Red</font> Yellow BG</td>
        <td>4C</td>
    </tr>
    <tr>
        <td>1A</td>
        <td rowspan="2" colspan="2" bgcolor="#FFFFCC">2AA<br />2AB<br />2AC</td>
        <td bgcolor="#FF0000">4D</td>
    </tr>
    <tr>
        <td>1B</td>
        <td>4E</td>
    </tr>
    <tr>
        <td>1C</td>
        <td>2C</td>
        <td>3C</td>
        <td>4F</td>
    </tr>
</table>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque tempus massa laoreet aliquet eu ac nisi. Vestibulum volutpat, lectus eget consectetur venenatis, ligula nunc imperdiet nisl, sed posuere magna arcu eu erat. Vivamus auctor eget felis ut suscipit. Aliquam finibus volutpat ipsum, ac elementum felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse lacus nisi, suscipit eget risus sed, consectetur tincidunt quam. Vestibulum condimentum hendrerit lacus ut molestie. Sed dignissim tellus purus, vitae vehicula nunc tristique at. Ut laoreet maximus magna, id finibus justo aliquam non.

Cras scelerisque sit amet odio sit amet egestas. Sed finibus neque egestas magna placerat faucibus. Donec luctus consectetur lacus, et convallis nisl imperdiet a. Nam tincidunt iaculis vehicula. Morbi in rhoncus mi, sed feugiat arcu. Etiam vehicula erat ut pharetra scelerisque. Nulla iaculis accumsan massa eget euismod. Fusce vitae suscipit nibh. Praesent faucibus justo at placerat eleifend. Suspendisse potenti. Suspendisse non maximus sem. Aenean tempor ipsum id eros ullamcorper, vel pretium diam imperdiet. Pellentesque egestas consectetur sapien et egestas. Ut quam est, blandit ac odio eget, sollicitudin finibus est. Curabitur quis dapibus velit. Curabitur vestibulum eleifend congue.

Nunc tempus mauris dictum nibh bibendum elementum et eget ante. Integer dignissim sit amet sapien vel convallis. Aenean efficitur purus et ullamcorper vulputate. Mauris purus arcu, suscipit eget suscipit vel, aliquet at purus. Sed sagittis velit ac volutpat convallis. Donec convallis libero a augue vulputate, vel accumsan lacus facilisis. Quisque in ipsum quis eros pretium scelerisque. Sed suscipit suscipit lectus, vitae bibendum lorem consequat eget. In tincidunt a ante non lobortis. Aenean id libero ornare, blandit mi ac, feugiat dui. Proin consequat porta mi a finibus.

Aliquam a lobortis nibh. Proin facilisis tellus vel sapien commodo bibendum. Sed in libero faucibus massa condimentum sollicitudin. Proin metus neque, consectetur sit amet consequat accumsan, bibendum ac justo. Nullam ut leo porttitor, fermentum felis nec, ultricies elit. Aliquam ut odio aliquam, rutrum lacus at, tempor nunc. Integer ac metus volutpat, tincidunt orci non, dapibus libero. Nam nec dolor nisl. Phasellus lobortis, arcu at laoreet elementum, eros nunc semper lacus, id elementum lectus elit quis lacus. Sed suscipit rhoncus quam. Ut dapibus ligula vitae diam commodo, non lobortis lectus rhoncus. Quisque justo mi, blandit et ipsum at, molestie convallis mi. Vivamus purus urna, aliquet eu hendrerit a, tempor eu augue. Nullam ullamcorper lacus id nibh ultricies suscipit. Curabitur vestibulum fringilla venenatis.

Nulla facilisi. Duis sagittis quam in nibh fringilla iaculis eu vitae arcu. Pellentesque porta risus dignissim magna consectetur, eu dictum turpis laoreet. Fusce imperdiet tristique dolor, vitae eleifend tortor viverra ut. Proin a semper lacus, quis vestibulum nisi. Mauris ultrices felis vel massa consectetur porta. Integer et vulputate libero. Donec pretium finibus magna, eu semper erat posuere vitae. Praesent condimentum est in eleifend imperdiet. Pellentesque ex diam, vehicula quis lacinia placerat, porttitor sed neque. Duis eleifend turpis magna, nec accumsan arcu faucibus a. Duis sed suscipit massa. Pellentesque sollicitudin, enim eu interdum suscipit, dolor dolor sagittis metus, a molestie enim ipsum sit amet turpis. Quisque turpis tortor, sagittis a iaculis id, commodo vel felis.
';

$mpdf=new mPDF();
$mpdf->SetCreator(PDF_CREATOR);
$mpdf->SetAuthor('Tassio Sirqueira');
$mpdf->SetTitle('TCPDF Exemplo');
$mpdf->SetSubject('TCPDF Aula');
$mpdf->SetKeywords('TCPDF, PDF, exemplo');
$mpdf->SetDisplayMode('fullpage');
$mpdf->nbpgPrefix = ' de ';
$mpdf->setFooter('Página {PAGENO}{nbpg}');
$mpdf->WriteHTML($html);
$mpdf->Output('Exemplo.pdf','I');

exit;