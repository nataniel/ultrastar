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
        $this->artist = $data['Wykonawca'] ?? $data['Artist'];
        $this->title = $data['Tytuł'] ?? $data['Title'];
        $this->language = $data['Język'] ?? $data['Language'];
        $this->type = $data['Rodzaj Muzyki'] ?? $data['Genre'];
        $this->year = $data['Rok'] ?? $data['Year'];
        $this->path = $data['Ścieżka Utworu'] ?? $data['Song Path'];
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