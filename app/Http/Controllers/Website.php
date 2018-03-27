<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class Website extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $server_id = 1006;

    public function index()
    {
        $json = json_decode(file_get_contents("https://api.rust-servers.info/status/".$this->server_id), true);
        $server_players = $json['players'];
        $server_max_players = $json['players_max'];
        $server_status = $json['status'];
        $server_name = $json['name'];

        $server_player_percentage = $server_players/$server_max_players*100;
        $user = Auth::user();

        return view('welcome', compact("server_players", "server_max_players", "server_status", "server_name", "server_player_percentage", "user"));
    }

    public function success(Request $request)
    {
        dd($request);
    }
}
