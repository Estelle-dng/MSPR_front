<?php
namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class MediaExtensionValidator extends ConstraintValidator {
    private $media_allowed_extension = [];

    public function __construct($media_allowed_extension) {
        $this->media_allowed_extension = $media_allowed_extension;
    }

    public function validate($protocol, Constraint $constraint) {
        $extension = $protocol->getExtension();

        if(!in_array(strtoupper($extension), $this->media_allowed_extension)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
            return;
        }
    }
}
