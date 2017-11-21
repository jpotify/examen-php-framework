<?php
namespace App\Http\Controllers;

use Geopagos\Domain\Model\ValueObjects\Age;
use Geopagos\Domain\Model\ValueObjects\Amount;
use Geopagos\Domain\Model\ValueObjects\Password;
use Geopagos\Domain\Services\Repositories\UserRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function list()
    {
        return view("greeting", ["users" => $this->userRepository->getAll()]);
    }

    public function show($id)
    {
        return view("user-profile", ["user" => $this->userRepository->getById($id)[0]]);
    }
}