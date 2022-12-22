<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    /**
     * App\Models\Household
     *
     * @property int $id
     * @property string $color
     * @property string $size
     * @property string $img
     * @property float $price
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Database\Factories\JewelryFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry query()
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry whereColor($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry whereImg($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry wherePrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry whereSize($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Jewelry whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class Jewelry extends Model
    {
        use HasFactory;

        protected $table = 'jewelry';

        protected $fillable = [
            'color',
            'img',
            'price',
        ];
    }
