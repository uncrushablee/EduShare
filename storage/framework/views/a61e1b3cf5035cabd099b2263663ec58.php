<?php $__env->startSection('title', 'Barang'); ?>
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?php echo $__env->yieldContent('title'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $__env->yieldContent('title'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Filter Search -->
                    <div class="card mb-2">
                        <div class="card-body">
                            <form action="<?php echo e(url('/barang')); ?>" method="GET" class="form-inline">
                                <input type="text" name="search" class="form-control mr-2" placeholder="Cari barang..." value="<?php echo e(request('search')); ?>">
                                <button type="submit" class="btn btn-secondary">Filter</button>
                            </form>
                        </div>
                    </div>

                    <!-- Data Table -->
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/barang/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Barang</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered table-hover text-center" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Category</th>
                                        <th>Supplier</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration + ($barang->currentPage() - 1) * $barang->perPage()); ?></td>
                                            <td><?php echo e($data->name); ?></td>
                                            <td><?php echo e($data->category); ?></td>
                                            <td><?php echo e($data->supplier); ?></td>
                                            <td><?php echo e($data->stock); ?></td>
                                            <td>Rp. <?php echo e(number_format($data->price, 0)); ?></td>
                                            <td><?php echo e($data->note); ?></td>
                                            <td>
                                                <form class="d-inline" action="/barang/<?php echo e($data->id_barang); ?>/edit" method="GET">
                                                    <button type="submit" class="btn btn-success btn-sm mr-1">
                                                        <i class="fa-solid fa-pen"></i> Edit
                                                    </button>
                                                </form>
                                                <form class="d-inline" action="/barang/<?php echo e($data->id_barang); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" id="btn-delete">
                                                        <i class="fa-solid fa-trash-can"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="8">Data tidak ditemukan.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <div class="mt-3">
                                <?php echo e($barang->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zaida\Downloads\login-register-crud-laravel-10-main\login-register-crud-laravel-10-main\resources\views/barang/barang.blade.php ENDPATH**/ ?>