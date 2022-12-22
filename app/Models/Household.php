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
     * @method static \Database\Factories\HouseholdFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|Household newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Household newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Household query()
     * @method static \Illuminate\Database\Eloquent\Builder|Household whereColor($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Household whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Household whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Household whereImg($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Household wherePrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Household whereSize($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Household whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class Household extends Model
    {
        use HasFactory;

        protected $fillable = [
            'color',
            'img',
            'price',
        ];
    }
