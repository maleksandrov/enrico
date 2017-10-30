<?phpclass SupportedCountry {    public $countryCode;	public $regions;	public $holidayTypes;    public function __construct($countryCode) {        $this->countryCode = $countryCode;		$this->regions = array();		$this->holidayTypes = array();    }	public function isRegionSupported($region)	{		for($i = 0; $i < count($this->regions); $i++)		{			if(strcmp($region, $this->regions[$i]) == 0)				return true;		}		return false;	}		public function getArray() {		return array('countryCode' => $this->countryCode, 'regions' => $this->regions, 'holidayTypes' => $this->holidayTypes);	}}?>