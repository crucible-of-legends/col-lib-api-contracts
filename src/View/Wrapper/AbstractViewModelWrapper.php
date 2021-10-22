<?php

namespace COL\Library\ApiContracts\View\Wrapper;

use COL\Library\ApiContracts\View\Decor\ErrorViewDecor;
use COL\Library\ApiContracts\View\Decor\NavigationViewDecor;

abstract class AbstractViewModelWrapper
{
    public ?ErrorViewDecor $error;
    public ?NavigationViewDecor $navigation;
}
