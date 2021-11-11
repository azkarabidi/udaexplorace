<?php

namespace App\Jobs;

use App\Models\Group;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class UpateGroupData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $group;
    public function __construct(Group $group)
    {
        $this->group=$group;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {



        //question1
        $response = Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get('https://api.typeform.com/forms/JxX0VQCC/responses?included_response_ids='.$this->group->form_submit.'&fields=4K5RrLU7xanC');
        //file2
        $file2 = Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get('https://api.typeform.com/forms/JxX0VQCC/responses?included_response_ids='.$this->group->form_submit.'&fields=Wm0xRbr21YnQ');
        $nice =$response->object(); 
        $nice2 =$file2->object(); 
        //get file url
        $folder= Http::withToken('3uDWWkLzsG3NXo2RmgGzSi5Z9gMS6AC5o93SobqxnCFu')->get($nice->items[0]->answers[0]->file_url);
        // get firl url2
        $folder2= Http::withToken('3uDWWkLzsG3NXo2RmgGzSi5Z9gMS6AC5o93SobqxnCFu')->get($nice2->items[0]->answers[0]->file_url);
        $body = $folder->getBody()->getContents();

        Storage::disk('public')->put('4K5RrLU7xanC'.$this->group->form_submit.'.jpeg',$body);
        $body2 = $folder2->getBody()->getContents();
        Storage::disk('public')->put('Wm0xRbr21YnQ'.$this->group->form_submit.'.jpeg',$body2);
        $pantun = Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->
        get('https://api.typeform.com/forms/JxX0VQCC/responses?included_response_ids='.$this->group->form_submit.'&fields=7ig9XUNUxoDS');
        $pantunobject=$pantun->object();

        $data=Group::find($this->group->id);
        $data->outcome=json_encode($nice->items[0]->calculated);
        $data->img1='4K5RrLU7xanC'.$this->group->form_submit.'.jpeg';
        $data->img2='Wm0xRbr21YnQ'.$this->group->form_submit.'.jpeg';
        $data->pantun=$pantunobject->items[0]->answers[0]->text;
        $data->save();
    }
}
