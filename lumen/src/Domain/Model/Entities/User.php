<?php
namespace Geopagos\Domain\Model\Entities;

use Geopagos\Domain\Model\ValueObjects\UserName;
use Geopagos\Domain\Model\ValueObjects\Password;
use Geopagos\Domain\Model\ValueObjects\Age;

class User
{
	private $id;

	private $userName;

	private $password;

	private $age;

	private $favoriteUsers;

	private $payments;

	public function __construct(int $id, UserName $userName, 
		Password $password, Age $age)
	{
		$this->id = $id;
		$this->userName = $userName;
		$this->password = $password;
		$this->age = $age;
	}

	public function setFavoriteUsers(\SplDoublyLinkedList $favoriteUsers)
	{
		$this->favoriteUsers = $favoriteUsers;
	}

	public function setPayments(\SplDoublyLinkedList $payments)
	{
		$this->payments = $payments;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getUserName()
	{
		return $this->userName;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function getFavoriteUsers()
	{
		return $this->favoriteUsers;
	}

	public function getPayments()
	{
		return $this->payments;
	}
}