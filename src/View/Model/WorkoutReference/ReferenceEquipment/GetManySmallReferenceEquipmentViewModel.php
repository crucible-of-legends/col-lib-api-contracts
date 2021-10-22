<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetManySmallReferenceEquipmentViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
}