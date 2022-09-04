<?php
namespace Slavlee\EventlistenerTutorial\Event;

final class HelloworldControllerShowActionEvent {
    public $title = '';
    public $message = '';

    /**
     * Create a HelloworldControllerShowActionEvent
     * @param string $title
     * @param string $message
     */
    public function __construct($title, $message) {
        $this->title = $title;
        $this->message = $message;
    }
}