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

        $response = Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get('https://api.typeform.com/forms/U9a2ajhV/responses?included_response_ids='.$this->group->form_submit);
        $data=$response->object();
        $img1=$data->items[0]->answers[8]->file_url;
        $img2=$data->items[0]->answers[13]->file_url;
        $img3=$data->items[0]->answers[28]->file_url;
        $img4=$data->items[0]->answers[31]->file_url;
        $img5=$data->items[0]->answers[49]->file_url;
        $imagedata= Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get($img1);
        $imagedata2= Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get($img2);
        $imagedata3= Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get($img3);
        $imagedata4= Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get($img4);
        $imagedata5= Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->get($img5);
    
          Storage::disk('public')->put('value-1-'.$this->group->name.'.jpeg',$imagedata->getBody()->getContents());
          Storage::disk('public')->put('value-2-'.$this->group->name.'.jpeg',$imagedata2->getBody()->getContents());
          Storage::disk('public')->put('value-3-'.$this->group->name.'.jpeg',$imagedata3->getBody()->getContents());
          Storage::disk('public')->put('value-4-'.$this->group->name.'.jpeg',$imagedata4->getBody()->getContents());
          Storage::disk('public')->put('value-5-'.$this->group->name.'.jpeg',$imagedata5->getBody()->getContents());
   
            $got=Group::find($this->group->id);
            $got->outcome=json_encode($data->items[0]->calculated);
            $got->pantun=date("Y-m-d H:i:s", strtotime($data->items[0]->submitted_at));
            $got->img1='value-1-'.$this->group->name.'.jpeg';
            $got->img2='value-2-'.$this->group->name.'.jpeg';
            $got->img3='value-3-'.$this->group->name.'.jpeg';
            $got->img4='value-4-'.$this->group->name.'.jpeg';
            $got->img5='value-5-'.$this->group->name.'.jpeg';
            $got->save();

    }
}
