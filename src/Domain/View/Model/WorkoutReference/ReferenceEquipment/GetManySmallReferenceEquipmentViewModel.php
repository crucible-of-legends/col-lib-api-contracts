<?php

namespace COL\Library\ApiContracts\Domain\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetManySmallReferenceEquipmentViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
}
