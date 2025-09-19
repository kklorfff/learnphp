  <?php 
    class box { 
    private $height;
    public $width;
    public $lenght;

    public static $count = 0;
    public static function something(){
        var_dump(Box::$count);
        var_dump(self::$count);
        var_dump(self::class);
        var_dump(static::class);
    }
    public function __construct($width, $height, $lenght)
    {
        var_dump(Box::$count);
        var_dump(self::$count);
        $this->width = $width;
        $this->height = $height;
    }
}

class Metalbox extends Box {

}

Box::$count = 1;
var_dump(Box::$count);

Box::$count = 2; 
var_dump(Box::$count);
var_dump(Box::$count);  
Box::something();
Metalbox::something();