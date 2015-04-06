<?php
namespace Mindweb\Persist;

use Mindweb\Persist\Event\PersistEvent;
use Mindweb\Subscriber\Subscriber;
use Symfony\Component\Config\Definition\ConfigurationInterface;

abstract class Persist implements Subscriber
{
    const PERSIST_EVENT = 'tracker.persist';

    /**
     * @return string
     */
    public final function getEventName()
    {
        return self::PERSIST_EVENT;
    }

    /**
     * @return array
     */
    public function register()
    {
        return array(
            array('persist', $this->getPriority())
        );
    }

    /**
     * @return null|ConfigurationInterface
     */
    public function getConfiguration()
    {
        return null;
    }

    /**
     * @param PersistEvent $persistEvent
     */
    abstract public function persist(PersistEvent $persistEvent);

    /**
     * @return int
     */
    protected function getPriority()
    {
        return 10;
    }
} 