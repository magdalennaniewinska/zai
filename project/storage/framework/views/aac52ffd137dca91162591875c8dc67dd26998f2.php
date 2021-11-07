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
                <div align="left" class="container">
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
                            <td style="padding:20px;">Nazwa</td>
                            <td style="padding:20px;">Tag</td>
                            <td style="padding:20px;">Model</td>
                            <td style="padding:20px;"> Opis </td>
                            <td style="padding:20px;">Ilość</td>
                            <td style="padding:20px;">Dostępne</td>
                            <td style="padding:20px;">Link do strony producenta</td>
                            <td style="padding:20px;">Link do zdjecia produktu</td>
                            <td style="padding:20px;">Edytuj</td>
                            <td style="padding:20px;">Usuń</td>
                        </tr>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="border-color: white;">
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->tag); ?></td>
                            <td><?php echo e($product->model); ?></td>
                            <td><?php echo e($product->description); ?></td>
                            <td><?php echo e($product->quantity); ?></td>
                            <td><?php echo e($product->available); ?></td>
                            <td><?php echo e($product->link); ?></td>
                            <td><?php echo e($product->image); ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(url('updateview',$product->id)); ?>">Edytuj</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="<?php echo e(url('deleteproduct',$product->id)); ?>">Usuń</a>
                            </td>
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

</html><?php /**PATH /Users/magdalenan/laravel_proj/project/resources/views/opiekun/showproduct.blade.php ENDPATH**/ ?>