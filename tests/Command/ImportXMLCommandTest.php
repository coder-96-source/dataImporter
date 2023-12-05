<?php

use PHPUnit\Framework\TestCase;
use App\Command\ImportXMLCommand;
use Symfony\Component\Console\Application;
use App\Interface\DataImporterServiceInterface;
use Symfony\Component\Console\Tester\CommandTester;

class ImportXMLCommandTest extends TestCase
{
    public function testExecute(): void
    {
        // Mock the DataImporterServiceInterface
        $dataImporterServiceMock = $this->createMock(DataImporterServiceInterface::class);

        $dataImporterServiceMock->expects($this->once())
        ->method('processFeed')
        ->with('test_path.xml', 'App\Entity\YourEntityClass');

        $command = new ImportXMLCommand($dataImporterServiceMock);

        $application = new Application();
        $application->add($command);

        // Set up the input arguments
        $arguments = [
            'command' => $command->getName(), // Pass the command name as 'command'
            'path' => 'test_path.xml',
            'entityName' => 'App\Entity\YourEntityClass',
        ];

        $commandTester = new CommandTester($command);

        $commandTester->execute($arguments);

        $this->assertSame(0, $commandTester->getStatusCode());
        $this->assertStringContainsString('XML data imported successfully.', $commandTester->getDisplay());
    }
}
