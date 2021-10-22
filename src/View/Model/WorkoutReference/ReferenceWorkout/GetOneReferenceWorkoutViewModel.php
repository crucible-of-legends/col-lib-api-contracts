<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;
use COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout\Nested\ReferenceExerciseInOneWorkoutNestedModel;

final class GetOneReferenceWorkoutViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;

    /** @var ReferenceExerciseInOneWorkoutNestedModel[]  */
    public array $orderedExercises;
}