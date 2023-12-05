<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Interface\DataImporterServiceInterface;

use Symfony\Component\Serializer\SerializerInterface;

class XMLImporterService implements DataImporterServiceInterface
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    public function processFeed(string $path, string $entityName): void
    {
        $xml = simplexml_load_file($path);

        foreach ($xml->children() as $itemData) {
            // Convert SimpleXMLElement to array
            $dataArray = json_decode(json_encode($itemData), true);
            
            foreach ($dataArray as $key => $value) {
                if (is_array($value) && empty($value)) {
                    $dataArray[$key] = null; // Set empty arrays to null
                }
            }
            
            $item = (new $entityName())->fillObject($dataArray);
            // Persist the Item object to the database
            $this->entityManager->persist($item);

        }
        // Flush all changes to the database
        $this->entityManager->flush();
    }
}
