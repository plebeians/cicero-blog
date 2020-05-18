<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{

    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = [
        'description',
        'text',
        'slug',
        'sort',
        'seo_description',
        'seo_keywords',
        'title',
    ];

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
        return $this->slug;
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumb')
             ->useFallbackUrl('/images/anonymous-user.jpg')
             ->useFallbackPath(public_path('/images/anonymous-user.jpg'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getThumbAttribute() {
        $thumb = $this->getMedia('thumb')->first();
        if(!$thumb) {
            return '';
        }
        return $thumb->getUrl();
    }
}
