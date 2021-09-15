<?php

namespace COL\Library\Contracts\View\Wrapper;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class SingleViewModelWrapper extends AbstractViewModelWrapper
{
    public ?BaseViewModelInterface $data;
    public array $context = [];
}