<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public $search;
    public $video;
    public ?string $message = null;
    public bool $switch = false;
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }

    public function toggle()
    {

        $this->switch = !$this->switch;
    }

    public function searchVideo()
    {
        //dd($this->search);
        $validateDate = $this->validate([
            'search' => 'required'
        ]);
        //echo $this->search;
        $apikey = 'AIzaSyCSxSazSFwgw29MK3V59nPePblQMGZT16M';
        $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $this->search . '&maxResults=5&key=' . $apikey;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $data = json_decode($response);
        $video = json_decode(json_encode($data), true);
        //$video = $this->search;
        dd($video);
        return view('livewire.dashboard.youtube', ['video' => $this->search]);
    }
}
