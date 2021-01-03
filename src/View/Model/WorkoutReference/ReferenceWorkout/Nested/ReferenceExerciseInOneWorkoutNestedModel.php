<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout\Nested;

final class ReferenceExerciseInOneWorkoutNestedModel
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public int $position;

    /** @var ReferenceExerciseEquipmentNestedModel[] */
    public array $equipments;
}