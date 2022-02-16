<?php

declare(strict_types=1);

namespace App\Containers\AccountingSection\AccountContainer\Data\Repositories;

use App\Containers\AccountingSection\AccountContainer\Data\Repositories\Interfaces\OwnerRepositoryInterface;
use App\Containers\AccountingSection\AccountContainer\Models\Interfaces\OwnerInterface;
use App\Containers\AccountingSection\AccountContainer\Models\Owner;
use App\Ship\Parents\Repositories\AbstractRepository;
use Doctrine\Persistence\ManagerRegistry;

class OwnerRepository extends AbstractRepository implements OwnerRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Owner::class);
    }


    public function findById(string $id): ?OwnerInterface
    {
        return $this->find($id);
    }

    public function save(OwnerInterface $owner): void
    {
        $this->getEntityManager()->persist($owner);
        $this->getEntityManager()->flush($owner);
    }
}