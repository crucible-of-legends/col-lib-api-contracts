<?php

namespace COL\Library\Contracts\View\Model\Reference\ReferenceEquipment;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetOneReferenceExerciseViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public array $equipments;
    public array $muscles;
}