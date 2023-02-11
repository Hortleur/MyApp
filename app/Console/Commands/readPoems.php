<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Genre;


class readPoems extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $directory = Storage::allDirectories('topics');
        foreach ($directory as $dir){
            $files = Storage::allFiles($dir);
            foreach ($files as $file){
                $fileName = explode('/', $file);
                $topic = DB::table('topic')->where('name', '=', $fileName[1])->get('id');
                $authorName = explode('by', $fileName[2]);
                $author =  explode('.', $authorName[1]);
                $fileTitle1 = explode(".", $fileName[2]);
                $fileTitle =$fileTitle1[0];
                $content = Storage::get($file);


                DB::table('poem')->insert([
                    'title'  => $fileTitle,
                    'poem'  => $content,
                    'topic_id' => $topic->value('id'),
                    'author'  => $author[0]
                ]);
            }
        }
    }
}
