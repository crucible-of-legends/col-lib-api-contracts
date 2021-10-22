<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetManyMediumReferenceEquipmentViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
}