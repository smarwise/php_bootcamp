<?PHP

class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = false;

	function __construct($array)
	{
		if (isset($array['red']) && isset($array['green']) && isset($array['blue']))
		{
			$red = intval($array['red']);
			$green = intval($array['green']);
			$blue = intval($array['blue']);
		}                                                                                                                                                     
		else if (isset($array['rgb']))
		{
			$rgb = intval($array['rgb']);
			$this->red = $rgb >> 16 & 255;
			$this->green = $rgb >> 8 & 255;
			$this->blue = $rgb & 255;
		}
		if (Self::$verbose)
			echo "Color(red: $red, green: $green, blue: $blue) constructed."."\n";
	}

	function sub($rhs)
	{
		$newcolor = array(
			'red' => $this->red - $rhs->red,
			'green' => $this->green - $rhs->green,
			'blue' => $this->blue - $rhs->blue
			);
			return (new Color($newcolor));
	}

	function add($rhs)
	{
		$newcolor = array(
		"red" => $this->red + $rhs->red,
		'green' => $this->green + $rhs->green,
		'blue' => $this->blue + $rhs->blue
		);
		return (new Color($newcolor));
	}

	function mult($f)
	{
		$newcolor = array(
			"red" => $this->red * $f,
			'green' => $this->green * $f,
			'blue' => $this->blue * $f
			);
			return (new Color($newcolor));
	}

	function __toString()
	{
		return ("Color(red: $this->red, green: $this->green, blue: $this->blue)");
	}

	function __destruct()
	{
		if (Self::$verbose)
			echo "Color(red: $red, green: $green, blue: $blue) destructed."."\n";
	}	
	static function doc()
	{
		$fd = fopen("Color.doc.txt", "r");
		echo fread($fd, filesize("Color.doc.txt"))."\n";
		fclose($fd);
	}
}
?>


struct Color 
{
	int red;
	int green;
	#int blue;
}

#Color add(Color lhs , Color rhs)
{

	Color ret;

	ret.blue = lhs.blue + rhs.blue;
	return ret;
}

Color a;
Color b;

a.blue = 8;
b.blue = 7;

Color a = add(a,b);