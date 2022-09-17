<?php

namespace Slavlee\EventlistenerTutorial\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Slavlee\EventlistenerTutorial\Event\HelloworldControllerShowActionEvent;
use Slavlee\EventlistenerTutorial\Event\HelloworldControllerShowActionAdditionalInfoEvent;

class HelloworldController extends ActionController {
    /**
     * Show Hello World
     * @return ResponseInterface
     */
    public function showAction(): ResponseInterface {
        $title = 'Hello World!';
        $message = 'This is the original text.';

        $newData = $this->eventDispatcher->dispatch(
            new HelloworldControllerShowActionEvent($title, $message)
        );

        if ($newData)
        {
            $title = $newData->title;
            $message = $newData->message;
        }

        $additionalInfoEvent = $this->eventDispatcher->dispatch(
            new HelloworldControllerShowActionAdditionalInfoEvent()
        );

        $this->view->assign('title', $title);
        $this->view->assign('message', $message);
        $this->view->assign('additionalInfo', $additionalInfoEvent->additionalInfo);

        return $this->htmlResponse();
    }
}