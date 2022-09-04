<?php
namespace Slavlee\EventlistenerTutorial\EventListener;

use Slavlee\EventlistenerTutorial\Event\HelloworldControllerShowActionEvent;

final class HelloworldListener {
   
    /**
     * Event Listener for Event in HelloworldController -> showAction
     * @return HelloworldControllerShowActionEvent
     */
    public function __invoke(HelloworldControllerShowActionEvent $event): HelloworldControllerShowActionEvent {
        $event->title .= ' (CHANGED THROUGH EVENT LISTENER)';
        $event->message .= ' (CHANGED THROUGH EVENT LISTENER)';
        
        return $event;
    }
}