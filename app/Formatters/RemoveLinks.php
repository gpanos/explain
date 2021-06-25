<?php

namespace App\Formatters;

class RemoveLinks
{
    /**
     * Runs the formatter.
     *
     * @param string $text
     *
     * @return string
     */
    public function __invoke($text)
    {
        $text = preg_replace(
            '|([\w\d]*)\s?(https?://([\d\w\.-]+\.[\w\.]{2,6})[^\s\]\[\<\>]*/?)|i',
            '',
            $text
        );

        return $text;
    }
}
