<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">


<head>
<meta charset="utf-8" />
<title>P1_Kalkulator kredytowy</title>
</head>


<body>

<h1><b>Kalkulator kredytowy Marleny<b/></h1>





<h4>
</h4>

<?php
require_once dirname(__FILE__).'/config.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/apP1calc_view.php");

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/apP1calc_view.php';

?>


</body>

</html>