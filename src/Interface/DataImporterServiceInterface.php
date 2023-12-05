<?php

namespace App\Interface;

interface DataImporterServiceInterface

{
    public function processFeed(string $path, string $entitiyName): void;
}