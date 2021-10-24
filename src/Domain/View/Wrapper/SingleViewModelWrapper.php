<?php

namespace COL\Library\ApiContracts\Domain\View\Wrapper;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;
use COL\Librairy\BaseContracts\Domain\View\Wrapper\SingleViewModelWrapperInterface;

final class SingleViewModelWrapper extends AbstractViewModelWrapper implements SingleViewModelWrapperInterface
{
    public ?ViewModelInterface $data;
    public array $context = [];
}
