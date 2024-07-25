<!-- resources/views/products/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
            <form action="<?php echo e(route('products.update', $product)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo e($product->name); ?>" required class="form-input mt-1 block w-full">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea id="description" name="description" class="form-textarea mt-1 block w-full"><?php echo e($product->description); ?></textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                    <input type="text" id="price" name="price" value="<?php echo e($product->price); ?>" required class="form-input mt-1 block w-full">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </form>
            <a href="<?php echo e(route('products.index')); ?>" class="block mt-4 text-blue-500 hover:text-blue-700">Back to Products</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\lab1ubt\resources\views/products/edit.blade.php ENDPATH**/ ?>