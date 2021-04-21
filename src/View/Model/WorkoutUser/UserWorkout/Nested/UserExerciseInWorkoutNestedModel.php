<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout\Nested;

final class UserExerciseInWorkoutNestedModel
{
    public string $id;
    public string $name;
    public string $image;
    public string $status;
    public int $position;
    public int $referenceExerciseId;

    public ?int $lastReps;
    public ?int $lastWeight;
    public ?int $lastDuration;
    public ?int $lastDistance;

    public ?int $plannedReps;
    public ?int $plannedWeight;
    public ?int $plannedDuration;
    public ?int $plannedDistance;

    public ?int $completedReps;
    public ?int $completedWeight;
    public ?int $completedDuration;
    public ?int $completedDistance;

    public ?int $restDuration;
}