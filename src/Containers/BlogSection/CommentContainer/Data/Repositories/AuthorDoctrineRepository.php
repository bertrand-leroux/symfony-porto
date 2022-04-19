<?php

declare(strict_types=1);

namespace App\Containers\BlogSection\CommentContainer\Data\Repositories;

use App\Containers\BlogSection\CommentContainer\Data\Repositories\Interfaces\AuthorRepositoryInterface;
use App\Containers\BlogSection\CommentContainer\Models\Author;
use App\Containers\BlogSection\CommentContainer\Models\Interfaces\AuthorInterface;
use App\Ship\Parents\Repositories\AbstractDoctrineRepository;
use Doctrine\Persistence\ManagerRegistry;

class AuthorDoctrineRepository extends AbstractDoctrineRepository implements AuthorRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Author::class);
    }

    public function findById(string $id): ?AuthorInterface
    {
        return $this->find($id);
    }

    public function save(AuthorInterface $author): void
    {
        $this->getEntityManager()->persist($author);
        $this->getEntityManager()->flush($author);
    }
}