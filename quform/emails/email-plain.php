<?php

if (!defined('QUFORM_ROOT')) exit;

$n = QUFORM_EMAIL_NEWLINE;
echo $mailer->Subject;

foreach ($form->getElements() as $element) {
    if (!$element->isHidden() && ($config['showEmptyFields'] || (!$config['showEmptyFields'] && $element->getValue() != null))) {
        echo $n . $n . $element->getLabel() . $n;
        echo '------------------------' . $n;
        echo $element->getFormattedValue();
    }
}

if (isset($config['extra']) && is_array($config['extra']) && count($config['extra'])) {
    foreach ($config['extra'] as $key => $value) {
        if (is_array($value) && array_key_exists('plain', $value)) $value = $value['plain'];
        echo $n . $n . $key . $n;
        echo '------------------------' . $n;
        echo $value . $n;
    }
}