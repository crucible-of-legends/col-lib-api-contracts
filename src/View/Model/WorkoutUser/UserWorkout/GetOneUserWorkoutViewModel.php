<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutUser\UserWorkout;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;
use COL\Library\ApiContracts\View\Model\WorkoutUser\UserWorkout\Nested\UserExerciseInWorkoutNestedModel;

final class GetOneUserWorkoutViewModel implements ViewModelInterface
{
    public string $id;
    public string $name;
    public string $image;
    public string $visibility;
    public ?string $programmedDate;
    public ?string $completedDate;

    /** @var UserExerciseInWorkoutNestedModel[]  */
    public array $orderedExercises;
}