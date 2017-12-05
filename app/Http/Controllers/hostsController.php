<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Host;

class hostsController extends Controller
{

    public function index(Request $request){
        $ip = $request->ip();
        echo "tu ip".$ip;
        $host = new Host();
        $host->ip = $ip;
        $host->save();
    }
    public function store(){
        $host = $request->input('host');//required
        if(!$host){
            return "no se ha indicado el hosts";
        } 
    } 
    
        // Now the IP chain contains only untrusted proxies and the client IP
        return $clientIps ? array_reverse($clientIps) : array($ip);
    }
}


