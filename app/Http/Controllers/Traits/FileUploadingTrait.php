<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait FileUploadingTrait
{
    public function saveFiles(Request $request)
    {

        $finalRequest = $request;
        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                if ($key == 'file') {
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $path = storage_path('cvs');
                    $request->file($key)->move($path, $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                }
            }
        }
        return $finalRequest;
    }
}
