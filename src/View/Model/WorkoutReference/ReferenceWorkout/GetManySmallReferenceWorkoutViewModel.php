<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetManySmallReferenceWorkoutViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
}
