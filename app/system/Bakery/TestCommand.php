<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2013-2016 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */
namespace UserFrosting\System\Bakery;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use UserFrosting\System\Bakery\Bakery;

/**
 * Assets builder CLI Tools.
 * Wrapper for npm/node commands
 *
 * @extends Bakery
 * @author Alex Weissman (https://alexanderweissman.com)
 */
class TestCommand extends Bakery
{
    /**
     * @var string Path to the build/ directory
     */
    protected $buildPath;

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this->setName("test")
             ->setDescription("Run tests")
             ->setHelp("Run php unit tests");
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->io->title("UserFrosting's Tester");
        $command = \UserFrosting\VENDOR_DIR . "/bin/phpunit --colors=always";
        $this->io->writeln("> <comment>$command</comment>");
        passthru($command);
    }
}