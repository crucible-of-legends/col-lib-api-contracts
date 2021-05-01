<?php

namespace COL\Library\Contracts\View\Wrapper;

use COL\Library\Contracts\View\Decor\ErrorViewDecor;
use COL\Library\Contracts\View\Decor\NavigationViewDecor;

abstract class AbstractViewModelWrapper implements ViewModelWrapperInterface
{
    public ?ErrorViewDecor $error;
    public ?NavigationViewDecor $navigation;
}