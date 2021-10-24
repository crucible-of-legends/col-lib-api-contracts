<?php

namespace COL\Library\ApiContracts\Domain\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetManyMediumReferenceWorkoutViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
}
