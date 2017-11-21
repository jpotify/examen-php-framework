<?php
namespace Geopagos\Domain\Model\ValueObjects;

use Exception;

class Amount
{
	private $amount;

	public function __construct(float $amount)
	{
		if ($amount <= 0) {
			throw new Exception("Amount must be greater than 0", 1);
		}

		$this->amount = $amount;
	}

	public function get()
	{
		return $this->amount;
	}
}

/* End of file */