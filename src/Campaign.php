<?php namespace Fuzzybaird\Campaign;

use Fuzzybaird\Campaign\Step;

/**
* Base Campaign class
*/
class Campaign
{
	protected $steps = [];

	protected $stepObject;
	
	function __construct()
	{
		$this->stepObject = new Step;
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
			$stepObject = clone $this->stepObject;
			$result = call_user_func($step, $stepObject);
			print_r($result);
		}
	}
}
?>