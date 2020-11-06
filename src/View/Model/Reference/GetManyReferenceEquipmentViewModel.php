<?php

namespace COL\Library\Contracts\View\Model\Reference;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManyReferenceEquipmentViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
}