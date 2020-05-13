<?php

namespace LewisCowles\KnownUploaderUrl {

    use \Idno\Common\Plugin;

    class Main extends Plugin {
        function registerEventHooks() {
            $config = \Idno\Core\Idno::site()->config();

            /* Do something */
        }
    }
}
