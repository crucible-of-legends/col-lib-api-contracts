<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout\Nested;

final class ReferenceExerciseInWorkoutNestedModel
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public int $position;
    public array $equipments;
}