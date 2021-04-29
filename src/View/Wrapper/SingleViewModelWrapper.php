<?php

namespace COL\Library\Contracts\View\Wrapper;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class SingleViewModelWrapper implements ViewModelWrapperInterface
{
    public BaseViewModelInterface $data;
}