<?php

namespace COL\Library\Contracts\View\Model\Reference\ReferenceExercise;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManyLargeReferenceExerciseViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $video;
    public array $muscles;
    public array $equipments;
}