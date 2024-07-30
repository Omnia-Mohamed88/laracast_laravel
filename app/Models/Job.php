<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all (): array{
     return
     [
        ['title' => 'Director', 'salary' => '$50,000', 'id' => 1],
        ['title' => 'Fullstack', 'salary' => '$60,000', 'id' => 2],
        ['title' => 'Teacher', 'salary' => '$2,000', 'id' => 3],
     ];
    }
    public static function find(int $id ) : array{
         $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        //  if ($job) {
        //     return view('job' , ['job' => $job]);
        //         } else {
        //             abort(404, 'Job not found');
        //         }
        if( ! $job){
            abort(404);

        }
        return $job;

    }
}