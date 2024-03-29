<?php

namespace COL\Library\ApiContracts\Domain\View\Decor;

use COL\Librairy\BaseContracts\Domain\View\Decor\ViewDecorInterface;

final class PaginationViewDecor implements ViewDecorInterface
{
    public int $totalObjects;
    public int $currentPageNumber;
    public int $lastPageNumber;
    public int $objectsPerPage;
}
