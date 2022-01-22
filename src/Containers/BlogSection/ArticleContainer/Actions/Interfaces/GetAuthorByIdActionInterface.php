<?php

declare(strict_types=1);

namespace App\Containers\BlogSection\ArticleContainer\Actions\Interfaces;

use App\Containers\BlogSection\ArticleContainer\Models\Interfaces\AuthorInterface;
use Symfony\Component\Uid\Uuid;

interface GetAuthorByIdActionInterface
{
    public function run(Uuid $id): ?AuthorInterface;
}