<?php
namespace Geopagos\Domain\Model\ValueObjects;

use Exception;

class UserName
{
	private $userName;

	public function __construct(string $userName)
	{
		if (is_null($userName) || $userName == "") {
			throw new Exception("User Name must not be empty", 1);
		}

		$this->userName = $userName;
	}

	public function get()
	{
		return $this->userName;
	}
}

/* End of file */