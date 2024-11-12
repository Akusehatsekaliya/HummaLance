<?php

namespace App\Services;

use App\Http\Requests\AboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use App\Models\Banner;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutService
{
    use FileTrait;

    public function update(AboutRequest $request, About $about)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            if ($about->image !== null) {
            $this->remove($about->image);
            }
            $validatedData['image'] = $this->upload('about', $request->file('image'));

        }else{
            $validatedData['image'] = $about->image;
        }

        return $validatedData['image'];
    }
}
