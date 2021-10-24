<?php

namespace COL\Library\ApiContracts\Domain\View\Wrapper;

use COL\Library\ApiContracts\Domain\View\Decor\ErrorViewDecor;
use COL\Library\ApiContracts\Domain\View\Decor\NavigationViewDecor;

abstract class AbstractViewModelWrapper
{
    public ?ErrorViewDecor $error;
    public ?NavigationViewDecor $navigation;
}
