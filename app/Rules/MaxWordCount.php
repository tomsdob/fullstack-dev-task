<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxWordCount implements Rule
{
    /**
     * Validation attribute name.
     *
     * @var string
     */
    private $attribute;

    /**
     * Expected amount of words.
     *
     * @var int
     */
    private $expectedWordAmount;

    /**
     * Create a new rule instance.
     *
     * @param int $expectedWordAmount
     */
    public function __construct(int $expectedWordAmount)
    {
        $this->expectedWordAmount = $expectedWordAmount;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param string $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->attribute = $attribute;
        $trimmedString = trim($value);
        $wordCount = count(explode(' ', $trimmedString));

        return $wordCount <= $this->expectedWordAmount;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The {$this->attribute} must contain no more than {$this->expectedWordAmount} words.";
    }
}
