<?php
namespace Slavlee\EventlistenerTutorial2\EventListener;

use Slavlee\EventlistenerTutorial\Event\HelloworldControllerShowActionAdditionalInfoEvent;

final class HelloworldAdditionalInfoListener {
   
    /**
     * Event Listener for Event in HelloworldController -> showAction
     * @return HelloworldControllerShowActionAdditionalInfoEvent
     */
    public function __invoke(HelloworldControllerShowActionAdditionalInfoEvent $event): HelloworldControllerShowActionAdditionalInfoEvent {
        $event->additionalInfo = 'Lorem Ipsum!';
        
        return $event;
    }
}