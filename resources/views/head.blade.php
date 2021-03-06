<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('/site.webmanifest')}}">
    <title>Brandsmiths</title>
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.12/release/featherlight.min.css" type="text/css"
          rel="stylesheet"/>
    <style>
        /**
 * Featherlight Loader
 *
 * Copyright 2015, WP Site Care http://www.wpsitecare.com
 * MIT Licensed.
 */
        @-webkit-keyframes featherlightLoader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes featherlightLoader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .featherlight-loading .featherlight-content {
            -webkit-animation: featherlightLoader 1s infinite linear;
            animation: featherlightLoader 1s infinite linear;
            background: transparent;
            border: 8px solid #8f8f8f;
            border-left-color: #fff;
            border-radius: 80px;
            width: 80px;
            height: 80px;
            min-width: 0;
        }

        .featherlight-loading .featherlight-content > * {
            display: none !important;
        }

        .featherlight-loading .featherlight-close,
        .featherlight-loading .featherlight-inner {
            display: none;
        }
    </style>
    @if (App::environment('production'))
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115147978-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-115147978-1');
        </script>
    @endif

    </head>
