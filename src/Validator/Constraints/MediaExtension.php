<?php

namespace App\Validator\Constraints;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class MediaExtension extends Constraint {
    public $message = 'Extension not allowed';

    public function validatedBy() {
        return 'App\Validator\MediaExtensionValidator';
    }

}
