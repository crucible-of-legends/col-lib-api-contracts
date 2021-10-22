<?php

namespace COL\Library\Contracts\View\Wrapper;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;
use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Wrapper\MultipleViewModelWrapperInterface;
use COL\Library\Contracts\View\Decor\PaginationViewDecor;

final class MultipleViewModelWrapper extends AbstractViewModelWrapper implements MultipleViewModelWrapperInterface
{
    /** @var ViewModelInterface[] */
    public array $data;
    public array $context = [];

    public ?PaginationViewDecor $pagination;
}