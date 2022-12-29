<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    /**
     * App\Models\AutoDetails
     *
     * @property int $id
     * @property string $color
     * @property string $size
     * @property string $img
     * @property float $price
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Database\Factories\AutoDetailsFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails query()
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails whereColor($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails whereImg($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails wherePrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails whereSize($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AutoDetails whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class AutoDetails extends Model
    {
        use HasFactory;

        protected $table = 'household';

        protected $fillable = [
            'color',
            'img',
            'price',
        ];
    }
