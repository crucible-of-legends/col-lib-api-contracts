<?php

namespace COL\Library\ApiContracts\Domain\Registry\UserWorkout;

use COL\Librairy\BaseContracts\Domain\Registry\DTOStatusRegistry;

interface UserWorkoutStatusRegistry extends DTOStatusRegistry
{
    public const STATUS_PLANNED = 'planned';
    public const STATUS_IN_PROGRESS = 'in-progress';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_OVERDUE = 'overdue';
    public const STATUS_ABORTED = 'aborted';
}
