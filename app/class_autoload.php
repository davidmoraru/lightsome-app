<?php
    class_alias(Light\Some::class, Conn::class);
    class_alias(Light\Conn::class, Conn::class);
    class_alias(Light\Session::class, Conn::class);
    class_alias(Light\Client::class, Conn::class);
    class_alias(Light\View::class, Conn::class);
    Dotenv\Dotenv::createImmutable('/')->load();