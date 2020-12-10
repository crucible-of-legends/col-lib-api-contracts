<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManyMediumReferenceEquipmentViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
}