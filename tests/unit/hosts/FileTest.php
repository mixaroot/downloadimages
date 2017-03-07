<?php

namespace Mixaroot\Downloadimages\tests\unit\hosts;

use Mixaroot\Downloadimages\hosts\File;
use Mixaroot\Downloadimages\resources\interfaces\ResourceInterface;

/**
 * Class FileTest
 * @package Mixaroot\Downloadimages\tests\unit\hosts
 */
class FileTest extends \Codeception\Test\Unit
{
    /**
     * @dataProvider getConfigWrongPath
     * @expectedException \Exception
     * @expectedExceptionMessage Wrong path. It is not directory
     */
    public function testWrongPath($path)
    {
        $class = new File();
        $class->setPath($path);
    }

    public function getConfigWrongPath()
    {
        return [
            [
                'path' => 'test/test/'
            ],
        ];
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage file exist in path
     */
    public function testWrongFullPath()
    {
        $file = pathinfo(__FILE__, PATHINFO_FILENAME) . '.php';
        $class = new File();
        $class->setPath(__DIR__);
        $class->setName($file);
        $class->getResource();
    }

    public function testGetResource()
    {
        $file = pathinfo(__FILE__, PATHINFO_FILENAME) . '.jpg';
        $class = new File();
        $class->setPath(__DIR__);
        $class->setName($file);
        $object = $class->getResource();
        $this->assertTrue($object instanceof ResourceInterface);
    }
}