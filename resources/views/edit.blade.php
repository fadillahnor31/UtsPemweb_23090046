<x-layouts.app :title="__('Edit Product')">
    <div class="flex h-full w-full flex-col gap-4 rounded-xl">
        <h1 class="text-xl font-bold mb-4">Edit Product</h1>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-500 text-white rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('update', $product->id) }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ old('name', $product->name) }}" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ old('price', $product->price) }}" required>
                @error('price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>

                @if ($product->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded-md">
                    </div>
                @endif

                <div class="flex items-center gap-4">
                    <label for="image" class="cursor-pointer px-4 py-2 bg-gray-300 text-black rounded-md hover:bg-gray-400">Choose Image</label>
                    <input type="file" name="image" id="image" accept="image/*" class="hidden">
                </div>
                <span id="file-name" class="text-gray-600">{{ old('image', $product->image ? basename($product->image) : 'No file chosen') }}</span>
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update Product</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function (event) {
            var fileName = event.target.files.length > 0 ? event.target.files[0].name : 'No file chosen';
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
</x-layouts.app>
