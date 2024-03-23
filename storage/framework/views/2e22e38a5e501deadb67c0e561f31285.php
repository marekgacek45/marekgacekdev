<!DOCTYPE html>
<html>
<head>
    <title>marekgacekdev.pl</title>
</head>
<body>
    <h1><?php echo e($details['title']); ?></h1>

    <p>Od: <?php echo e($details['name']); ?></p>

    <p>Email: <a href="mailto:<?php echo e($details['email']); ?>"><?php echo e($details['email']); ?></a></p>

    <p>Telefon: <a href="tel:<?php echo e($details['phone']); ?>"><?php echo e($details['phone']); ?></a></p>

    <p>Wiadomość: <?php echo e($details['message']); ?></p>
   
    
</body>
</html><?php /**PATH C:\Users\gacmen45\Desktop\marekgacekdev-main\resources\views/emails/contactEmail.blade.php ENDPATH**/ ?>