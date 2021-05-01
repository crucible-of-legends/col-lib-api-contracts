<?php

namespace COL\Library\Contracts\View\Wrapper;

use COL\Library\Contracts\View\Decor\PaginationViewDecor;
use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class MultipleViewModelWrapper extends AbstractViewModelWrapper
{
    /** @var BaseViewModelInterface[] */
    public array $data;

    public ?PaginationViewDecor $pagination;
}