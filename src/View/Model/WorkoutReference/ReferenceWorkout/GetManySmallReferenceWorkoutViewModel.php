<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetManySmallReferenceWorkoutViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
}