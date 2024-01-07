<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TimerController extends Controller
{
   public function getTimer($roomname)
    {
        // Odanın süre bilgisini kontrol et
        $timer = Cache::get("timer_$roomname");

        if (!$timer) {
            // Eğer süre bilgisi yoksa veya süre dolduysa başlangıç tarihini güncelle
            $timer = now();
            Cache::put("timer_$roomname", $timer, 120); // 120 saniye (2 dakika)
        }

        return response()->json(['expires_at' => $timer->addMinutes(2)]);
    }
}
