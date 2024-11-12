<?php

namespace App\Services;

use App\Http\Requests\BannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BannerService
{
    use FileTrait;

    public function store(BannerRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('picture')) {
            $validatedData['picture'] = $this->upload('pictures', $request->file('picture'));
        }

        return $validatedData['picture'];
    }

    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('picture_update')) {
            $this->remove($banner->picture);
            $validatedData['picture'] = $this->upload('pictures', $request->file('picture_update'));

        }else{
            $validatedData['picture'] = $banner->picture;
        }

        return $validatedData['picture'];
    }
}
