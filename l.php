<?PHP
//As special characters are not allowed in XML, this script allows an encoded URL to be included in the RSS feed without throwing an error
$queryRaw=urldecode($_GET['l']);
$queryProcessed = strip_tags($queryRaw);
$query = str_replace(array('\'', '"'), '' , $queryProcessed);
$query = str_replace('+', '%20', $query);
$url = trim($query);
header("Location: $url");
?>
