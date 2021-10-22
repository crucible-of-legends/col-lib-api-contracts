<?php

namespace COL\Library\ApiContracts\Registry\UserWorkout;

interface UserWorkoutExerciseStatusRegistry
{
    public const STATUS_PLANNED = 'planned';
    public const STATUS_IN_PROGRESS = 'in-progress';
    public const STATUS_IN_COMPLETED = 'completed';
    public const STATUS_ABORTED = 'aborted';
    public const STATUS_CANCELLED = 'cancelled';
}