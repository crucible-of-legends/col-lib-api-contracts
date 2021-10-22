<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;
use COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceWorkout\Nested\ReferenceExerciseInManyWorkoutNestedModel;

final class GetManyLargeReferenceWorkoutViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;

    /** @var ReferenceExerciseInManyWorkoutNestedModel[] */
    public array $orderedExercises;
}