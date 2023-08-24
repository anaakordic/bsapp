<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        $earliestTime = Carbon::createFromTimeString('08:00:00');
        $lastTime = Carbon::createFromTimeString('12:00:00');

        if (!$pickupTime->between($earliestTime, $lastTime)) {
            $fail('Please choose the time between 08:00-12:00.');
        }
    }

    public function message()
    {
        return 'Please choose the time between 08:00-12:00.';
    }
}
