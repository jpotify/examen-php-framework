<?php
namespace Geopagos\Domain\Services\Repositories;

interface UserRepository
{
    public function getAll();

    public function getById(int $id);
}