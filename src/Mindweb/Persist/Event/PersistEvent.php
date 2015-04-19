<?php
namespace Mindweb\Persist\Event;

use Symfony\Component\EventDispatcher\Event;
use Mindweb\Recognizer\Event\AttributionEvent;

class PersistEvent extends Event
{
    /**
     * @var AttributionEvent
     */
    private $attributionEvent;

    /**
     * @param AttributionEvent $attributionEvent
     */
    public function __construct(AttributionEvent $attributionEvent)
    {
        $this->attributionEvent = $attributionEvent;
    }

    /**
     * @return AttributionEvent
     */
    public function getAttributionEvent()
    {
        return $this->attributionEvent;
    }
} 