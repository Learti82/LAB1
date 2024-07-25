<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Products</h1>
        
        <!-- Search and Filter Form -->
        <form method="GET" action="<?php echo e(route('products.index')); ?>" class="bg-white p-6 rounded-lg shadow-md mb-6">
            <?php echo csrf_field(); ?>
            <div class="flex flex-col sm:flex-row sm:space-x-4 mb-4">
                <!-- Search by Name -->
                <div class="flex-1">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo e(request('name')); ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Min Price -->
                <div class="flex-1">
                    <label for="min_price" class="block text-sm font-medium text-gray-700">Min Price</label>
                    <input type="number" id="min_price" name="min_price" value="<?php echo e(request('min_price')); ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Max Price -->
                <div class="flex-1">
                    <label for="max_price" class="block text-sm font-medium text-gray-700">Max Price</label>
                    <input type="number" id="max_price" name="max_price" value="<?php echo e(request('max_price')); ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>

            <!-- Filter Buttons -->
            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Apply Filters
                </button>

                <a href="<?php echo e(route('products.index')); ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Reset Filters
                </a>
            </div>
        </form>

        <!-- Products Table -->
        <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($product->name); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($product->description); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">$<?php echo e($product->price); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                            <a href="<?php echo e(route('products.edit', $product)); ?>" class="text-blue-600 hover:text-blue-900">Edit</a>
                            <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <?php echo e($products->links()); ?>

    </div>

    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\lab1ubt\resources\views/products/index.blade.php ENDPATH**/ ?>