<?php

namespace App\Service;

use HTMLPage;

class HTMLParseService
{
    public const URL_PAGE = 'https://ya.ru/';

    public function getTagsList(): array
    {
        $content = file_get_contents(self::URL_PAGE);
        $itemList = [];
        $tags = ['body', 'p', 'title', 'h1', 'div', 'span', 'a', 'ul', 'li'];

        foreach ($tags as $tag) {
            if (preg_match_all('</' . $tag . '>', $content, $fined)) {

                $newTag = new HTMLPage(
                    $tag,
                    count($fined[0]),
                );

                $itemList[] = [
                    'tagName' => $newTag->getTagName(),
                    'tagCount' => $newTag->getTagCount(),
                ];
            }
        }

        return $itemList;
    }
}
