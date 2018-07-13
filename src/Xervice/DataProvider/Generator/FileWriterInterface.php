<?php
declare(strict_types=1);

namespace Xervice\DataProvider\Generator;

interface FileWriterInterface
{
    /**
     * @param $filename
     * @param $content
     */
    public function writeToFile($filename, $content);
}