<?php

namespace COL\Library\ApiContracts\Domain\View\Model\WorkoutReference\ReferenceExercise;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetManyLargeReferenceExerciseViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $video;
    public array $muscles;
    public array $equipments;
}
