<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;
use COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout\Nested\ReferenceExerciseInManyWorkoutNestedModel;

final class GetManyLargeReferenceWorkoutViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;

    /** @var ReferenceExerciseInManyWorkoutNestedModel[] */
    public array $orderedExercises;
}