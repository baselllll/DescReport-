<?php

namespace App\Console\Commands;

use App\Test;
use Illuminate\Console\Command;

class OrderDesc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:test';

    protected $description = 'order the number of tests by desc way';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $num = [];
        //get data order in desc and get account and test
        $NUMtEST = Test::orderBy('numtest', 'DESC')->with('account')->get();
        foreach ($NUMtEST as $numte){
            $nu = [$numte->account->name => $numte->numtest];
           array_push($num,$nu);
        }
        $fp = fopen('C:\xampp7.2\htdocs\new_dashboard\public\data.json', 'w');
        fwrite($fp,json_encode($num));
        fclose($fp);
    }
}
