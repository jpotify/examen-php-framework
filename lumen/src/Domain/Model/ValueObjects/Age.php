<?php
namespace Geopagos\Domain\Model\ValueObjects;

use Exception;

class Age
{
	private $age;

	public function __construct(int $age)
	{
		if ($age < 18) {
			throw new Exception("Age must be greater than 18", 1);
		}

		$this->age = $age;
	}

	public function get()
	{
		return $this->age;
	}
}

/* End of file */