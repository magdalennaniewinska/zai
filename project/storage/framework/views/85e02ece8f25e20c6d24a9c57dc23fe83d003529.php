<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="opiekun/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="opiekun/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="opiekun/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="opiekun/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('opiekun.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('opiekun.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
                <div class="container" align="center">
                    <?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                        <button type="button" data-dismiss="alert"></button>
                        <?php echo e(session()->get('message')); ?>

                    </div>
                    <?php endif; ?>
                    <style>
                        table, th, td {
                        border: 2px solid black;
                        }
                    </style>
                    <table>
                        <tr style="background-color: gray; align-items: center;">
                            <td style="padding:20px;">Opiekun</td>
                            <td style="padding:20px;">Student</td>
                            <td style="padding:20px;">Produkt</td>
                            <td style="padding:20px;">Ilość</td>
                            <td style="padding:20px;">Zwróć</td>
                        </tr>
                        
                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center" style="border-color: white;">

                        <form action="<?php echo e(url('return')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                            <td><input type="text" name="opiekun_name" value="<?php echo e($orders->opiekun_name); ?>" hidden=""><?php echo e($orders->opiekun_name); ?></td>
                            <td><input type="text" name="student_name" value="<?php echo e($orders->student_name); ?>" hidden=""><?php echo e($orders->student_name); ?></td>
                            <td><input type="text" name="product_name" value="<?php echo e($orders->product_name); ?>" hidden=""><?php echo e($orders->product_name); ?></td>
                            <td><input type="text" name="quantity" value="<?php echo e($orders->quantity); ?>" hidden=""><?php echo e($orders->quantity); ?></td>
                            <td>
                            <button class="btn btn-success">Zwrot</button>
                            </td>
                            <td><input type="text" name="id" value="<?php echo e($orders->id); ?>" hidden=""></td>
                        </form>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH /Users/magdalenan/laravel_proj/project/resources/views/opiekun/showorder.blade.php ENDPATH**/ ?>