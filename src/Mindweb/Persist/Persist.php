<?php
namespace Mindweb\Persist;

use Mindweb\Recognizer\Event\AttributionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

abstract class Persist implements EventSubscriberInterface
{
    const PERSIST_EVENT = 'tracker.persist';

    const DEFAULT_PRIORITY = 10;

    /**
     * @param AttributionEvent $attributionEvent
     */
    abstract public function persist(AttributionEvent $attributionEvent);

    /**
     * @return int
     */
    public static function getPriority()
    {
        return self::DEFAULT_PRIORITY;
    }

    /**
     * @inherited
     */
    public static function getSubscribedEvents()
    {
        return array(
            self::PERSIST_EVENT => array(
                'persist',
                self::getPriority()
            )
        );
    }
} 