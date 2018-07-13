<?php
declare(strict_types=1);

namespace Xervice\DataProvider\DataProvider;

/**
 * @method array getElements()
 */
interface DataProviderInterface
{
    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @param array $data
     */
    public function fromArray(array $data): void;
}