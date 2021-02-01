<?php

use Flarum\Extend;
use Flarum\Api\Controller\ShowDiscussionController;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js')
        ->css(__DIR__ . '/less/forum.less'),

    (new Extend\ApiController(ShowDiscussionController::class))
        ->addInclude('user'),

    new Extend\Locales(__DIR__ . '/locale'),
];
