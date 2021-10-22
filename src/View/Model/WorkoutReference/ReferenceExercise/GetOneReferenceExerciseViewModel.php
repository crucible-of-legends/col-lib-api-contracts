<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceEquipment;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetOneReferenceExerciseViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public array $equipments;
    public array $muscles;
}