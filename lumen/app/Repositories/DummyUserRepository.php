<?php
namespace App\Repositories;

use Geopagos\Domain\Model\Entities\User;
use Geopagos\Domain\Model\Entities\Payment;
use Geopagos\Domain\Model\ValueObjects\UserName;
use Geopagos\Domain\Model\ValueObjects\Password;
use Geopagos\Domain\Model\ValueObjects\Age;
use Geopagos\Domain\Model\ValueObjects\Amount;
use Geopagos\Domain\Services\Repositories\UserRepository;

class DummyUserRepository implements UserRepository
{
    public function getAll()
    {
        return [
            new User(1, new UserName("aturing"), new Password("qwerty2017"), new Age(42)),
            new User(2, new UserName("dritchie"), new Password("goitia245"), new Age(70)),
            new User(3, new UserName("sjobs"), new Password("apple1344"), new Age(56)),
            new User(4, new UserName("cbabbage"), new Password("huotu2017"), new Age(60))
        ];
    }

    public function getById(int $id)
    {
        $currentUser = new User(1, new UserName("aturing"), new Password("qwerty2017"), new Age(42));

        $favoriteUsers = new \SplDoublyLinkedList;
        $favoriteUsers->push(new User(2, new UserName("dritchie"), new Password("goitia245"), new Age(70)));
        $favoriteUsers->push(new User(4, new UserName("cbabbage"), new Password("huotu2017"), new Age(60)));
        $currentUser->setFavoriteUsers($favoriteUsers);

        $payments = new \SplDoublyLinkedList;
        $payments->push(new Payment(0, new Amount(145.8), new \DateTime("2017-11-23", new \DateTimeZone('America/Argentina/Buenos_Aires'))));

        $newDate = new \DateTime("2017-11-22", new \DateTimeZone('America/Argentina/Buenos_Aires'));
        $newDate->add(new \DateInterval("P1D"));        
        $payments->push(new Payment(2, new Amount(34.7), new \DateTime("2017-11-22", new \DateTimeZone('America/Argentina/Buenos_Aires'))));
        $currentUser->setPayments($payments);

        return [$currentUser];
    }
}