<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
    $feedItems = json_decode(
        json_encode([
            [
                'postedDateTime' => '3h',
                'content' => <<<str
                <p>
                    I made this. <a href="#">#myartwork</a> <a href="#">#pixl</a>
                </p>
                <img src="/images/simon-chilling.png" alt="" />
                str,
                'likeCount' => 23,
                'replyCount' => 45,
                'repostCount' => 151,
                'profile' => [
                    'displayName' => 'Michael',
                    'handle' => '@mich_jj',
                    'avatar' => '/images/michael.png'
                ],
                'replies' => [
                    [
                        'postedDateTime' => '3h',
                        'content' => <<<str
                                    <p>
                                        I made this. <a href="#">#myartwork</a> <a href="#">#pixl</a>
                                    </p>
                                    <img src="/images/simon-chilling.png" alt="" />
                                    str,
                        'likeCount' => 52,
                        'replyCount' => 12,
                        'repostCount' => 200,
                        'profile' => [
                            'displayName' => 'Alessia',
                            'handle' => '@alessia',
                            'avatar' => '/images/alessia.png'
                        ],
                    ]
                ]
            ]
        ])
    );


    return view('feed', compact('feedItems'));
});

Route::get('/profile', function () {
    $feedItems = json_decode(
        json_encode([
            [
                'postedDateTime' => '1h',
                'content' => '<p>Heh - this just like me!</p>',
                'likeCount' => 23,
                'replyCount' => 45,
                'repostCount' => 151,
                'profile' => [
                    'displayName' => 'Michael',
                    'handle' => '@mich_jj',
                    'avatar' => '/images/michael.png'
                ],
                'replies' => [
                    [
                        'postedDateTime' => '3h',
                        'content' => <<<str
                                    <p>
                                        I made this. <a href="#">#myartwork</a> <a href="#">#pixl</a>
                                    </p>
                                    <img src="/images/simon-chilling.png" alt="" />
                                    str,
                        'likeCount' => 52,
                        'replyCount' => 12,
                        'repostCount' => 200,
                        'profile' => [
                            'displayName' => 'Alessia',
                            'handle' => '@alessia',
                            'avatar' => '/images/alessia.png'
                        ],
                    ]
                ]
            ]
        ])
    );


    return view('profile', compact('feedItems'));
});
