<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use App\Interface\DataImporterServiceInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'ImportXML',
    description: 'Add a short description for your command',
)]
class ImportXMLCommand extends BaseImportCommand
{
    protected static $defaultName = 'ImportData';

    public function __construct(private readonly DataImporterServiceInterface $dataImporterServiceInterface)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $filePath = $input->getArgument('path');
        $entitiyName = $input->getArgument('entityName');

        $this->dataImporterServiceInterface->processFeed($filePath, $entitiyName);

        $output->writeln('XML data imported successfully.');

        return Command::SUCCESS;
    }

}
