<x-layouts.app :title="__('Create Product')">
    <div class="flex h-full w-full flex-col gap-4 rounded-xl">
        <h1 class="text-xl font-bold mb-4">Buat Produk</h1>

        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="block w-full p-2 border rounded-md" value="{{ old('name') }}" required>
                @error('name') 
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="block w-full p-2 border rounded-md" rows="4">{{ old('description') }}</textarea>
                @error('description') 
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" class="block w-full p-2 border rounded-md" value="{{ old('price') }}" required>
                @error('price') 
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Kolom untuk memilih gambar tetap ada -->
            <div class="space-y-2">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <div class="flex items-center gap-4">
                    <!-- Tombol pilih file menggunakan label -->
                    <label for="image" class="cursor-pointer px-6 py-2 bg-gray-300 text-black rounded-lg hover:bg-gray-400 block w-full p-2 border rounded-md">
                        Pilih Gambar
                    </label>
                    <!-- Menyembunyikan input file sebenarnya -->
                    <input type="file" name="image" id="image" accept="image/*" class="hidden">
                </div>
                <!-- Menampilkan nama file yang dipilih -->
                <span id="file-name" class="text-gray-600">{{ old('image') ? old('image') : 'No file chosen' }}</span>
                @error('image') 
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-4">
                <!-- Tombol submit yang lebih menonjol -->
                <button type="submit" class="px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 cursor-pointer">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</x-layouts.app>

<script>
    // Script untuk menampilkan nama file yang dipilih
    document.getElementById('image').addEventListener('change', function (event) {
        var fileName = event.target.files.length > 0 ? event.target.files[0].name : 'No file chosen';
        document.getElementById('file-name').textContent = fileName;
    });
</script>
