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
     * @var array
     */
    private $persistResults = array();

    /**
     * @param AttributionEvent $attributionEvent
     */
    public function __construct(AttributionEvent $attributionEvent)
    {
        $this->attributionEvent = $attributionEvent;
    }

    /**
     * @return array
     */
    public function getAttribution()
    {
        return $this->attributionEvent->getAttribution();
    }

    /**
     * @param string $persist
     * @param mixed $result
     */
    public function addPersistResult($persist, $result)
    {
        $this->persistResults[$persist] = $result;
    }
} 