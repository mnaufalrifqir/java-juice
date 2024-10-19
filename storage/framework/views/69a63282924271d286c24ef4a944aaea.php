<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link href="<?php echo e(asset('css/output.css')); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- CSS for carousel/flickity-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">

  

  <!-- PWA  -->
  <meta name="theme-color" content="#6777ef"/>
  <link rel="apple-touch-icon" href="<?php echo e(asset('assets/logo/logo-app.png')); ?>">
  <link rel="manifest" href="<?php echo e(asset('json/manifest.json')); ?>">
  
  <title>Java Juice Indonesia</title>

  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  
  <!-- CSS for modal/flowbite -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
</head>
<body class="font-poppins text-cp-black">
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldPushContent('before-scripts'); ?>
    <?php echo $__env->yieldPushContent('after-scripts'); ?>
</body>
</html><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>