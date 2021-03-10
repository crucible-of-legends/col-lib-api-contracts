<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;
use COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout\Nested\ReferenceExerciseInManyWorkoutNestedModel;

final class GetManyLargeUserWorkoutViewModel implements BaseViewModelInterface
{
    public string $id;
    public string $name;
    public string $image;
    public string $visibility;
    public ?string $programmedDate;
    public ?string $completedDate;

    public array $orderedExercises;
}