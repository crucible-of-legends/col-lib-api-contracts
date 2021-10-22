<?php

namespace COL\Library\ApiContracts\View\Decor;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Decor\ViewDecorInterface;

final class PaginationViewDecor implements ViewDecorInterface
{
    public int $totalObjects;
    public int $currentPageNumber;
    public int $lastPageNumber;
    public int $objectsPerPage;
}