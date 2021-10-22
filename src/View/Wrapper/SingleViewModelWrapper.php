<?php

namespace COL\Library\ApiContracts\View\Wrapper;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;
use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Wrapper\SingleViewModelWrapperInterface;

final class SingleViewModelWrapper extends AbstractViewModelWrapper implements SingleViewModelWrapperInterface
{
    public ?ViewModelInterface $data;
    public array $context = [];
}