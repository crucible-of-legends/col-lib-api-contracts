<?php

namespace COL\Library\Contracts\View\Wrapper;

use COL\Library\Contracts\View\Decor\ErrorViewDecor;
use COL\Library\Contracts\View\Decor\NavigationViewDecor;
use COL\Library\Contracts\View\Decor\PaginationViewDecor;
use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class MultipleViewModelWrapper implements ViewModelWrapperInterface
{
    /** @var BaseViewModelInterface[] */
    public array $data;

    public ?PaginationViewDecor $pagination;
    public ?ErrorViewDecor $error;
    public ?NavigationViewDecor $navigation;
}