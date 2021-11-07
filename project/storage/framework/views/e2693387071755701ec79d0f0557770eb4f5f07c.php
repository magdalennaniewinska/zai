<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <a href="<?php echo e(url('showallproduct')); ?>">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img height='300' width='150' src=<?php echo e($product->image); ?> alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4><?php echo e($product->name); ?></h4>
                        </a>
                        <p><?php echo e($product->description); ?></p>
                        <p>Wszystkich sztuk: <?php echo e($product->quantity); ?></p>
                        <p>Dostępnych sztuk: <?php echo e($product->available); ?></p>
                        <span><a href="<?php echo e(url('/search',$product->tag)); ?>"><?php echo e($product->tag); ?></a></span>
                        <form action="<?php echo e(url('wypozycz',$product->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="number" value="1" min="1" max=<?php echo e($product->available); ?> class="form-control" style="width:100px" name="quantity">
                            <br>
                            <input class="btn btn-primary" type="submit" value="wypozycz">
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
        <?php if(method_exists($data,'links')): ?>
        <div class="d-flex justify-content-center">
            <?php echo $data->links(); ?>

        </div>
        <?php endif; ?>
    </div>

</div><?php /**PATH /Users/magdalenan/laravel_proj/project/resources/views/student/product.blade.php ENDPATH**/ ?>