<?php
namespace Geopagos\Domain\Model\ValueObjects;

use Exception;

class Password
{
	private $passwd;

	public function __construct(string $passwd)
	{
		if (is_null($passwd) || $passwd == "") {
			throw new Exception("Password mus not be empty", 1);
		}

		$salt = "\$5\$rounds=1100\$eII0SBTuTIZuFyU8\$";
		$this->passwd = crypt($passwd, $salt);
	}

	public function get($passwd)
	{
		return $this->passwd;
	}
}

/* End of file */