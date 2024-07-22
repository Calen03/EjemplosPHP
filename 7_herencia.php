<?php
$dayOfWeek = date('l');
//$dayOfWeek = 'Friday';

class usuario
{
    private $id;
    private $nombre;
    private $mail;

    public function __construct($nombre, $mail)
    {
        $this->id = rand(0, 100);
        $this->nombre = $nombre;
        $this->mail = $mail;
    }

    public function Hola()
    {
        echo "<br> {$this->id} </br>";
        echo 'Hola ' . $this->nombre . ' Hora ' .  date("D, d M Y H:i:s \G\M\T", time());
        echo "<br> {$this->mail} </br>";
    }

    public function getNom()
    {
        return $this->nombre;
    }
}

class admin extends usuario
{
    private $rango;

    public function __construct($nombre, $mail,$rango)
    {
        $this->rango = $rango;
        parent::__construct($nombre, $mail);
    }
}

switch ($dayOfWeek) {
    case 'Monday':
        $message = 'Monday BLues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'At least it\'s not monday';
        $color = 'orange';
        break;
    case 'Wednesday':
        $message = 'What a week, huh!';
        $color = 'red';
        break;
    case 'Thursday':
        $message = 'Monday BLues';
        $color = 'brown';
        break;
    case 'Friday':
        $message = 'Gracias a dios es viernes';
        $color = 'green';
        break;
    case 'Saturday':
        $message = 'Monday BLues';
        $color = 'pink';
        break;
    case 'Sunday':
        $message = 'Monday BLues';
        $color = 'magenta';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?php echo $color ?>;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1><?php echo strtoupper($message);
        $user1 = new admin('luis', 'hola@gmail.com', 4);
        $user1->Hola();
        ?></h1>

</body>

</html>