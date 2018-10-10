<?PHP

require_once '../ex00/Color.class.php';

class Vertex
{
	private  $_x;
	private $_y;
	private  $_z;
	private $_w;
	private $__red;
	private $_color;
	static $verbose = false;

	
	function __construct($array)
	{
		if (isset($array['x']) && isset($array['y']) && isset($array['z']))
		{
			$this->_x = $array['x'];
			$this->_y = $array['y'];
			$this->_z = $array['z'];
			if (isset($array['w']))
				$this->_w = $array['w'];
			else
				$this->_w = 1.0;
			if (isset($array['color']))
				$this->_color = $array['color'];
			else
				$this->_color = new Color(array( 'red' => 255, 'green' => 255, 'blue' =>  255));

		}
		if (Self::$verbose)
		printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
	}

	function __toString()
	{
		return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
	}

	function __destruct()
	{
		if (Self::$verbose)
		printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
	}

	static function doc()
	{
		$fd = fopen("Vertex.doc.txt", "r");
		echo fread($fd, filesize("Vertex.doc.txt"))."\n";
		fclose($fd);
	}
}
?>