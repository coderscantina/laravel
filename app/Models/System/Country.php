<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\System\Country
 *
 * @property int $iso2
 * @property string|null $name_local
 * @property string|null $name_ar
 * @property string|null $name_cs
 * @property string|null $name_da
 * @property string|null $name_de
 * @property string|null $name_en
 * @property string|null $name_es
 * @property string|null $name_fi
 * @property string|null $name_fr
 * @property string|null $name_el
 * @property string|null $name_hr
 * @property string|null $name_it
 * @property string|null $name_ja
 * @property string|null $name_ka
 * @property string|null $name_ko
 * @property string|null $name_nl
 * @property string|null $name_no
 * @property string|null $name_pl
 * @property string|null $name_pt
 * @property string|null $name_pt_br
 * @property string|null $name_ro
 * @property string|null $name_ru
 * @property string|null $name_sk
 * @property string|null $name_sl
 * @property string|null $name_sv
 * @property string|null $name_tr
 * @property string|null $name_uk
 * @property string|null $name_zh
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIso2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameCs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameDa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameDe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameEl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameFi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameHr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameIt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameJa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameKa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameKo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameLocal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameNl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNamePl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNamePt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNamePtBr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameRo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameSk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameSl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameSv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameTr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameUk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNameZh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country withoutTrashed()
 * @mixin \Eloquent
 */
class Country extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'iso2';

    protected $table = 'countries';

    public function nameLocalized(): Attribute
    {
        return Attribute::make(
            fn() => data_get($this, self::getNameAccessor(), $this->name_en),
        );
    }

    protected static function getNameAccessor(): string
    {
        return 'name_' . app()->getLocale();
    }
}
