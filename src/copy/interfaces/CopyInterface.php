<?php

namespace Mixaroot\Downloadimages\copy\interfaces;

use Mixaroot\Downloadimages\resources\interfaces\ResourceInterface;

/**
 * Copy resource remote host to resource local file
 * Interface CopyInterfaces
 * @package Mixaroot\Downloadimages\interfaces
 */
interface CopyInterface
{
    /**
     * Copy first resource to second resource
     * @param ResourceInterfaces $res1
     * @param ResourceInterfaces $res2
     * @return mixed
     */
    public function copyResources(ResourceInterface $oResRead, ResourceInterface $oResWrite);
}