<?php

namespace Rylee\Funnel;

use Laravel\Nova\Card;

class Funnel extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * Get the component name for the element.
     *
     * @return string
     */

    /**
     * Indicates that the analytics should show current visitors.
     *
     * @return $this
     */

    public function __construct()
    {
        parent::__construct();
        $this->withMeta(['currentVisitors' => true]);
    }

    public function funnelData($funnelData, $labels, $subLabels, $name = 'Funnel', $colors = null)
    {
        return $this->withMeta(['funnelData' => $funnelData, 'subLables' => $subLabels, 'labels' => $labels, 'colors' => $colors, 'name' => $name]);
    }

    public function component()
    {
        return 'funnel';
    }
}
