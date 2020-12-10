<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManyLargeReferenceEquipmentViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public array $shops;
}