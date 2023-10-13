<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\TwoDigit;
use App\Models\Admin\LotteryMatch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Lottery extends Model
{
    use HasFactory;
    protected $fillable = [
        'pay_amount',
        'total_amount',
        'user_id',
        'lottery_match_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function lotteryMatch()
{
    return $this->belongsTo(LotteryMatch::class, 'lottery_match_id');
}

// public function twoDigits()
// {
//     return $this->belongsToMany(TwoDigit::class, 'lottery_two_digit_pivot', 'sub_amount');
// }
public function twoDigits() {
    return $this->belongsToMany(TwoDigit::class, 'lottery_two_digit_pivot')->withPivot('sub_amount')->withTimestamps();
}



// ... [rest of the Lottery model]

public function twoDigitsMorning()
{
    $morningStart = Carbon::now()->startOfDay()->addHours(6);
    $morningEnd = Carbon::now()->startOfDay()->addHours(12);
    return $this->belongsToMany(TwoDigit::class, 'lottery_two_digit_pivot', 'lottery_id', 'two_digit_id')->withPivot('sub_amount')
                ->wherePivotBetween('created_at', [$morningStart, $morningEnd]);
}




}