<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'EventlistenerTutorial',
        'Helloworld',
        [
            \Slavlee\EventlistenerTutorial\Controller\HelloworldController::class => 'show'
        ],
        // non-cacheable actions
        [
            \Slavlee\EventlistenerTutorial\Controller\HelloworldController::class => 'show'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    helloworld {
                        iconIdentifier = eventlistener_tutorial-plugin-helloworld
                        title = LLL:EXT:eventlistener_tutorial/Resources/Private/Language/locallang_db.xlf:tx_eventlistener_tutorial_helloworld.name
                        description = LLL:EXT:eventlistener_tutorial/Resources/Private/Language/locallang_db.xlf:tx_eventlistener_tutorial_helloworld.description
                        tt_content_defValues {
                            CType = list
                            list_type = eventlistenertutorial_helloworld
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
