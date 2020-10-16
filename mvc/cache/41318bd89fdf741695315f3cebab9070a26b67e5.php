

<?php $__env->startSection('title', 'Tạo mới danh mục'); ?>

<?php $__env->startSection('content'); ?>    
    <div class="row">
        <div class="col-6 offset-3">
            <h3 class="text-center text-info">Tạo mới danh mục</h3>
            <form action="<?php echo e(BASE_URL . 'save-add-cate'); ?>" method="post">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="cate_name" class="form-control">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="show_menu" 
                            type="checkbox" value="1" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị tại menu</label>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="desc" class="form-control" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-success" type="submit">Lưu</button>
                    <a href="<?php echo e(BASE_URL); ?>" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web3013\mvc\app\views/categories/add-form.blade.php ENDPATH**/ ?>