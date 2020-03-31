<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Quform - Ajax Contact Form</title>

<link rel="stylesheet" type="text/css" href="css/pagestyles.css" />
<link rel="stylesheet" type="text/css" href="css/standard.css" />
</head>
<body>
<div class="outside">
    <div class="quform-outer">
        <div class="quform-wrapper">
            <div class="quform quform-inner">
                <?php if (isset($result) && is_array($result) && array_key_exists('type', $result)) : ?>
                    <?php if ($result['type'] == 'error') : ?>
                        <div class="quform-title">Please go back and correct these errors</div>
                        <?php if (!empty($result['error'])) : ?>
                            <div class="quform-error-message">
                                <?php echo $result['error']; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (count($result['elementErrors'])) : ?>
                            <ul class="quform-errors-no-js">
                                <?php foreach ($result['elementErrors'] as $name => $info) : ?>
                                    <?php if (count($info['errors'])) :  ?>
                                        <li><?php echo Quform::escape($info['label']); ?><ul><li><?php echo Quform::escape($info['errors'][0]); ?></li></ul></li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php elseif ($result['type'] == 'success') : ?>
                        <?php echo $result['message']; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
         </div>
    </div>
</div>
</body>
</html>