<?php

namespace App\Models;

use App\Domain\Games\QueryBuilders\GameQueryBuilder;
use App\Presenters\HasRoutesPresenter;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\GameFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\Game
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property string $url_image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin Eloquent
 * @method static GameFactory factory(...$parameters)
 * @method static GameQueryBuilder|Game query()
 */
class Game extends Model
{
    use HasFactory;
    use HasRoutesPresenter;

    public function newEloquentBuilder($query): GameQueryBuilder
    {
        return new GameQueryBuilder($query);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'url',
        'description',
        'url_image',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function excerptDescription(): string
    {
        return Str::words($this->description, 10);
    }
}
