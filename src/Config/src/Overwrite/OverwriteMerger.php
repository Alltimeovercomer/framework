<?php

namespace Kraken\Config\Overwrite;

use Dazzle\Util\Support\ArraySupport;

class OverwriteMerger
{
    /**
     * @param array $old
     * @param array $new
     * @return array
     */
    public function __invoke($old, $new)
    {
        return ArraySupport::merge([ $old, $new ]);
    }
}
