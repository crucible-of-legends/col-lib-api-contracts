<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManySmallReferenceEquipmentViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
}