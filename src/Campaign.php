<?php namespace Fuzzybaird\Campaign;

/**
* Base Campaign class
*/
class Campaign
{
	protected $steps = [];
	
	function __construct()
	{
		# code...
	}

	public function addStep(callable $step)
	{
		array_push($this->steps, $step);
		return $this;
	}

	public function countSteps()
	{
		return count($this->steps);
	}

	public function runSteps()
	{
		foreach ($this->steps as $step) {
			$result = call_user_func($step);
			print_r($result);
		}
	}
}
?>