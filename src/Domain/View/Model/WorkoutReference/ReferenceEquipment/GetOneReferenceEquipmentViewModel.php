<?php

namespace COL\Library\ApiContracts\Domain\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetOneReferenceEquipmentViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public array $shops;
}
