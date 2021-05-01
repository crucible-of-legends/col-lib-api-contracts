<?php

namespace COL\Library\Contracts\View\Wrapper;

use COL\Library\Contracts\View\Decor\ErrorViewDecor;
use COL\Library\Contracts\View\Decor\NavigationViewDecor;
use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class SingleViewModelWrapper implements ViewModelWrapperInterface
{
    public ?BaseViewModelInterface $data;
    public ?ErrorViewDecor $error;
    public ?NavigationViewDecor $navigation;
}