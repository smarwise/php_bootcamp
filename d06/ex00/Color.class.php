<?PHP

class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = false;

	public function __construct($array)
	{
		if (isset($array['red']) && isset($array['green']) && isset($array['blue']))
		{
			$this->red = intval($array['red']);
			$this->green = intval($array['green']);
			$this->blue = intval($array['blue']);
		}
		else if (isset($array['rgb']))
		{
			$rgb = intval($array['rgb']);
			$this->red = $rgb >> 16 & 255;
			$this->green = $rgb >> 8 & 255;
			$this->blue = $rgb & 255;
		}
		if (Self::$verbose)
			echo "Color(red: $this->red, green: $this->green, blue: $this->blue) constructed."."\n";
	}

	public function sub($rhs)
	{
		$newcolor = array(
			'red' => $this->red - $rhs->red,
			'green' => $this->green - $rhs->green,
			'blue' => $this->blue - $rhs->blue
			);
			return (new Color($newcolor));
	}

	public function add($rhs)
	{
		$newcolor = array(
		"red" => $this->red + $rhs->red,
		'green' => $this->green + $rhs->green,
		'blue' => $this->blue + $rhs->blue
		);
		return (new Color($newcolor));
	}

	public function mult($f)
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
			echo "Color(red: $this->red, green: $this->green, blue: $this->blue) destructed."."\n";
	}	
	static function doc()
	{
		$fd = fopen("Color.doc.txt", "r");
		echo fread($fd, filesize("Color.doc.txt"))."\n";
		fclose($fd);
	}
}
?>