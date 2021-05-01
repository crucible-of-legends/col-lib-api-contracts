<?php

namespace COL\Library\Contracts\View\Decor;

final class PaginationViewDecor implements ViewDecorInterface
{
    public int $totalObjects;
    public int $currentPageNumber;
    public int $lastPageNumber;
    public int $objectsPerPage;
}