<?php
namespace Geopagos\Domain\Model\Entities;

use Exception;
use Geopagos\Domain\Model\ValueObjects\Amount;
use Geopagos\Domain\Model\Entities\PaymentIdentity;

class Payment
{
	private $id;

	private $amount;

	private $date;

	public function __construct(int $paymentId, Amount $amount, \DateTime $date)
	{
		$current = new \DateTime(null, new \DateTimeZone('America/Argentina/Buenos_Aires'));
		if ($date < $current) {
			throw new Exception("Payment date must be equal or greater than current date", 1);
		}

		$this->id = $paymentId;
		$this->amount = $amount;
		$this->date = $date;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function getDate()
	{
		return $this->date;
	}
}

/* End of file */