<?php

namespace COL\Library\ApiContracts\Registry\UserWorkout;

interface UserWorkoutStatusRegistry
{
    public const STATUS_PLANNED = 'planned';
    public const STATUS_IN_PROGRESS = 'in-progress';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_OVERDUE = 'overdue';
    public const STATUS_ABORTED = 'aborted';
}