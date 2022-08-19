<?php
namespace Main\Model;

class Song
{
    private $id;
    private $artist;
    private $title;
    private $language;
    private $type;
    private $year;
    private $path;

    public function __construct(array $data)
    {
        $this->id = $data["﻿"];
        $this->artist = $data['Wykonawca'];
        $this->title = $data['Tytuł'];
        $this->language = $data['Język'];
        $this->type = $data['Rodzaj Muzyki'];
        $this->year = $data['Rok'];
        $this->path = $data['Ścieżka Utworu'];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}