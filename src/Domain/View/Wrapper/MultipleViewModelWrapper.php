<?php

namespace COL\Library\ApiContracts\Domain\View\Wrapper;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;
use COL\Librairy\BaseContracts\Domain\View\Wrapper\MultipleViewModelWrapperInterface;
use COL\Library\ApiContracts\Domain\View\Decor\PaginationViewDecor;

final class MultipleViewModelWrapper extends AbstractViewModelWrapper implements MultipleViewModelWrapperInterface
{
    /** @var ViewModelInterface[] */
    public array $data;
    public array $context = [];

    public ?PaginationViewDecor $pagination;
}
