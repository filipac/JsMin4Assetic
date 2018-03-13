<?php
namespace Filipac\JSMin;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;

class JSMinFilter implements FilterInterface
{
    public function filterLoad(AssetInterface $asset)
    {
    }

    public function filterDump(AssetInterface $asset)
    {
        $asset->setContent(JSMin::minify($asset->getContent()));
    }
}
