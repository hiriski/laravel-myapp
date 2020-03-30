<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error</title>
        <meta name="description" content="Eror"/>
        <meta name="keywords" content="Error"/>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: "Segoe UI", Roboto, Helvetica Neue, Arial, sans-serif;
                background-color: #f7f7f7;
                color: #555;
            }
            #ERR_404 {  
                height: 100vh;
                width: 100%;
            }
            #ERR_404 {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            #ERR_404:before,
            #ERR_404:after {
                transform-origin: left bottom;
                height: 100vh;
                position: absolute;
                width: 100%;
                z-index: -1;
                content: '';
                top: 0;
                display: block;
                right: 0;
            }
            .err_404 {
                text-align: center;
            }
            .svg {
                display: block;
            }
            svg {
                height: 90px;
                width: 90px;
            }
            h1 {
                margin: 0px 0 1rem 0;
                font-size: 2.5rem
            }
            span {
                font-size: 1.35rem;
            }
            .btn {
                display: block;
                margin-top: 1.5rem;
            }
            a {
                display: inline-block;
                background-color: #547CFF;
                color: #fbfbfb;
                border-radius: 3px;
                padding: .75rem 1.5rem;
                text-decoration: none;
                line-height: 0;
            }
            a span svg {
                height: 18px;
                width: 18px;
                vertical-align: middle;
            }
            @media screen and (max-width:480px) {
                .err_404 {
                    padding: 1rem;
                }
                .svg svg {
                    width: 72px;
                    height: 72px;
                }
                span {
                    font-size: 1.15rem;
                }
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>