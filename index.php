<?php
    error_reporting(E_ALL);
    include 'vendor/autoload.php';
    const HOME = "Home Work 2";
?>
<html>

<head>
    <title><?=HOME?></title>
</head>
<body>
    <h1><?= HOME ?></h1><br>
<?php
    use Jenssegers\Date\Date;
    Date::setLocale('uk');
    echo Date::now()->format('l j F Y H:i:s').'<br>';

    echo string(HOME)->toUpper();
?>
</body>
</html>