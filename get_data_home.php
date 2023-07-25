<?php
include('simple_html_dom.php');
$url = 'https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm';
$lines_array = file($url);
$lines_string = implode('', $lines_array);
$xml = simplexml_load_string($lines_string);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach (libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    echo $xml->asXML();
}
?>
