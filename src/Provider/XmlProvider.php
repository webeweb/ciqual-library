<?php

/*
 * This file is part of the ciqual-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Provider;

/**
 * XML provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ciqual\Provider
 */
class XmlProvider {

    /**
     * Clean XML.
     *
     * @param string $filename The filename.
     * @return string Returns the cleaned XML.
     */
    public static function cleanXml(string $filename): string {

        $pattern  = "/(<[A-Za-z_]*>)(.*)(<\/[A-Za-z_]*>)/";
        $content  = file_get_contents($filename);
        $callback = function($matches) {

            $output = [
                $matches[1],
                htmlentities($matches[2], ENT_XML1 | ENT_QUOTES, "windows-1252"),
                $matches[3],
            ];

            return join("", $output);
        };

        return preg_replace_callback($pattern, $callback, $content);
    }
}