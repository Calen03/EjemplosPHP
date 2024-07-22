<?php
class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

/*$book1 = new Article('hola', 'cuentos');
echo $book1->title;
echo '<br></br>';
var_dump($book1->isPublished());
echo '<br></br>';
$book2 = new Article('adios', 'cuentos');
$book2->publish();
echo $book2->title;
var_dump($book2->isPublished());
*/

class stringUtility{
    
    public static function shout($string){
        return strtoupper($string).'!';

    } 

    public static function whisper($string){
        return strtolower($string).'.';

    } 

    public static function repeat($string,$times){
        return str_repeat($string,$times);
    } 
}

$cadena1 = new stringUtility();
echo $cadena1->shout('buenas tardes');
echo '</br>';
echo $cadena1->whisper('buEnaS tArdes');
echo '</br>';
$repeticion = $cadena1->repeat('buenas tardes',2);
echo '</br>';
var_dump($repeticion);
echo '</br>';
echo stringUtility::shout("Hello World");
echo '</br>';
echo stringUtility::whisper("Hello World");
echo '</br>';
echo stringUtility::repeat("Hello World",10000);

