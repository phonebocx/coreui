<?php

namespace PhoneBocx\UI\Commands;

use Illuminate\Console\Command;

class ListCalls extends Command
{
    /** @var string */
    protected $signature = 'zzz:listcalls';

    /** @var string */
    protected $description = 'This should be moved to a different package';

    /**
     * Do the needful
     *
     * @return integer
     */
    public function handle()
    {
        $this->info("You asked for listcalls");
        return Command::SUCCESS;
    }
}
