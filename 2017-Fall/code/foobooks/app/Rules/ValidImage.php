<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidImage implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        # First do a regexp test to make sure the path includes a valid image extension.
        # Could probably skip this step since the second test will also validate for this
        # But it's arguably more "economical" to not check the image if the path is not valid
        $pattern = '/[\w\-]+\.(jpg|png|gif|jpeg)/';
        $patternMatches = preg_match($pattern, $value);

        if (!$patternMatches) {
            return false;
        } else {
            # Next try and get details about the image using PHP's getimagesize function
            # If it can't load the image, this will throw an exception. We use a try/catch
            # to return false if that exception is thrown.
            try {
                $a = getimagesize($value);
                $imageType = $a[2];
                $imageTypes = [IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP];
                $validImage = in_array($imageType, $imageTypes);
            } catch (\Exception $e) {
                return false;
            }
        }

        # If we made it this far, we know the image is valid, so return true
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
