<?php

namespace Mixaroot\Downloadimages\resources;

use Mixaroot\Downloadimages\resources\interfaces\ResourceInterface;

/**
 * Class SetFileUrl
 * @package Mixaroot\Downloadimages\resources
 * @inheritdoc
 */
class SetFileUrl implements ResourceInterface
{
    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * @param $path
     * @return resource
     * @inheritdoc
     */
    public function get()
    {
        return fopen($this->path, "wb");
    }
}