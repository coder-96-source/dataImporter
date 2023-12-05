<?php

use PHPUnit\Framework\TestCase;
use App\Service\XMLImporterService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;


class XMLImporterServiceTest extends TestCase
{
    public function testProcessFeed(): void
    {
        $serializerMock = $this->createMock(SerializerInterface::class);
        $entityManagerMock = $this->createMock(EntityManagerInterface::class);
        
        $xmlPath = './feed.xml';

        $xmlImporterService = new XMLImporterService($entityManagerMock);

        $entityManagerMock->expects($this->atLeastOnce())
            ->method('persist');

        $entityManagerMock->expects($this->once())
            ->method('flush');
        $xmlImporterService->processFeed($xmlPath, \App\Entity\Item::class);

    }
}