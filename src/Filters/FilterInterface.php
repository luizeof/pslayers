<?php

namespace DarrynTen\Pslayers\Filters;

/**
 * Pslayers Filter Interface
 *
 * @category Filter
 * @package  Pslayers
 * @author   Darryn Ten <darrynten@github.com>
 * @license  MIT <https://github.com/darrynten/psfilters/LICENSE>
 * @link     https://github.com/darrynten/psfilters
 */
interface FilterInterface
{
    /**
     * Each filter adds its own things and must include
     * all the things. Not the best design.
     *
     * @var string $id
     */
    public function getFilterDetailsArray();
}
