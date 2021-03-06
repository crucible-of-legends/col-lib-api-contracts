<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;
use COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout\Nested\ReferenceExerciseInOneWorkoutNestedModel;

final class GetOneReferenceWorkoutViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;

    /** @var ReferenceExerciseInOneWorkoutNestedModel[]  */
    public array $orderedExercises;
}