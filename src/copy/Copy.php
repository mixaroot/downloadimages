<?php

namespace Mixaroot\Downloadimages\copy;

use Mixaroot\Downloadimages\copy\interfaces\CopyInterface;
use Mixaroot\Downloadimages\resources\interfaces\ResourceInterface;

/**
 * Class Copy
 * @package Mixaroot\Downloadimages\copy
 * @inheritdoc
 */
class Copy implements CopyInterface
{
    /**
     * @param ResourceInterface $res1
     * @param ResourceInterface $res2
     * @return int
     * @inheritdoc
     */
    public function copyResources(ResourceInterface $oResRead, ResourceInterface $oResWrite)
    {
        if (!$resRead = $oResRead->get()) {
            throw new \Exception('Can not open remote resource');
        }
        if (!$resWrite = $oResWrite->get()) {
            throw new \Exception('Can not open local resource');
        }
        return stream_copy_to_stream($resRead, $resWrite);
    }
}