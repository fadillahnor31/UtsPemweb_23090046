<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ __('Dashboard') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js CDN (for basic interactivity if needed) -->
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-7xl mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">📦 Product Dashboard</h1>
            <a href="{{ route('create') }}" class="inline-block px-5 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">+ Add Product</a>
        </div>

        <!-- Product Table -->
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-200 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="py-3 px-5 text-center">No</th>
                        <th class="py-3 px-5 text-center">Image</th>
                        <th class="py-3 px-5 text-left">Name</th>
                        <th class="py-3 px-5 text-right">Price</th>
                        <th class="py-3 px-5 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y">
                    @foreach ($products as $index => $product)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="text-center py-3 px-5 align-middle">{{ $index + 1 }}</td>
                            <td class="text-center py-3 px-5 align-middle">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-16 h-16 object-cover mx-auto rounded">
                                @else
                                    <span class="text-gray-400 italic">No image</span>
                                @endif
                            </td>
                            <td class="py-3 px-5 align-middle">{{ $product->name }}</td>
                            <td class="text-right py-3 px-5 align-middle">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="text-center py-3 px-5 align-middle">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('edit', $product->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded transition">Edit</a>
                                    <form action="{{ route('destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete this product?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
