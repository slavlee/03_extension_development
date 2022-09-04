<?php

namespace Slavlee\EventlistenerTutorial\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Slavlee\EventlistenerTutorial\Event\HelloworldControllerShowActionEvent;

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

        $this->view->assign('title', $title);
        $this->view->assign('message', $message);

        return $this->htmlResponse();
    }
}