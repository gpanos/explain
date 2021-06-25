<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ManKier
{
    protected $url = 'https://www.mankier.com/api/v2/explain/';

    public function explain($cmd, $cols)
    {
        $response = Http::get($this->url, [
            'cols' => $cols,
            'q' => trim($cmd),
        ]);

        return $response->body();
    }
}
