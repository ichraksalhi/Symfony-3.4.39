<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Histogram;

/**
 * @author Christophe Meneses
 */
class Histogram
{
    /**
     * Hardcode the size of each histogram bar, rather than letting it be determined algorithmically.
     *
     * @var int
     */
    protected $bucketSize;

    /**
     * Omit the thin divisions between the blocks of the histogram, making it into a series of solid bars.
     *
     * @var bool
     */
    protected $hideBucketItems;

    /**
     * When calculating the histogram's bucket size, ignore the top and bottom lastBucketPercentile percent.
     *
     * @var int
     */
    protected $lastBucketPercentile;

    /**
     * @param int $bucketSize
     *
     * @return $this
     */
    public function setBucketSize($bucketSize)
    {
        $this->bucketSize = $bucketSize;

        return $this;
    }

    /**
     * @param bool $hideBucketItems
     *
     * @return $this
     */
    public function setHideBucketItems($hideBucketItems)
    {
        $this->hideBucketItems = $hideBucketItems;

        return $this;
    }

    /**
     * @param int $lastBucketPercentile
     *
     * @return $this
     */
    public function setLastBucketPercentile($lastBucketPercentile)
    {
        $this->lastBucketPercentile = $lastBucketPercentile;

        return $this;
    }
}
