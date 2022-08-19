<?php
namespace Main\Controller;

use E4u\Common\File;
use Main\Model\Song;

class IndexController extends AbstractController
{
    const FILENAME = 'Songlist.csv';

    public function indexAction()
    {
        $csv = new File\Csv(self::FILENAME, 'files/');
        $csv->setDelimiter(';');

        $songs = [];
        foreach ($csv->getData() as $row) {
            $songs[] = new Song($row);
        }

        return [
            'songs' => $songs,
        ];
    }
}