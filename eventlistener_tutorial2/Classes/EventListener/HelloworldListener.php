<?php
namespace Slavlee\EventlistenerTutorial2\EventListener;

use Slavlee\EventlistenerTutorial\Event\HelloworldControllerShowActionEvent;

final class HelloworldListener {
   
    /**
     * Event Listener for Event in HelloworldController -> showAction
     * @return HelloworldControllerShowActionEvent
     */
    public function __invoke(HelloworldControllerShowActionEvent $event): HelloworldControllerShowActionEvent {
        $event->title .= ' (CHANGED THROUGH EVENT LISTENER 2)';
        $event->message .= ' (CHANGED THROUGH EVENT LISTENER 2)';
        
        return $event;
    }
}