<?php

namespace ripnet\EvoBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use ripnet\EvoBundle\Entity\XMLFile;

/**
 * Import files in ROM-XMLs into database.
 *
 * @author Tom Young <ripnet@gmail.com>
 */
class ImportCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('evo:import')
            ->setDescription('Import XMLs into database. Will remove what\'s currently there');

    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->container = $this->getApplication()->getKernel()->getContainer();
        $output->writeln(sprintf('Reading files <comment>please wait...</comment>!'));
        $finder = new Finder();
        $finder->files()->in($this->container->get('kernel')->getRootDir() . '/../ROM-XMLs')->name('*.xml')->sortByName();

        $em = $this->container->get('doctrine')->getManager();
        foreach ($finder as $file)
        {
            $dbFile = new XMLFile();
            $dbFile->setName($file->getFileName());
            $dbFile->setContents($file->getContents());
            $em->persist($dbFile);
        }
        $em->flush();

        $output->writeln("done.");
    }
}
