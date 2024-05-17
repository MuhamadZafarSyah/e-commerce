@extends('dashboard.components.layout')

@section('dashboard_content')
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
        <form action="/admin/dashboard/product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Name</label>
                    <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}"
                        class="@error('product_name') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Type product name" required>
                    @error('product_name')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                    <input type="text" name="stock" id="stock" value="{{ old('stock') }}"
                        class="@error('stock') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Product stock" required>
                    @error('stock')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="text" name="price" id="price" value="{{ old('price') }}"
                        class="@error('price') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rp ...." required>
                    @error('price')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="category"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="category" name="id_category" value="{{ old('id_category') }}"
                        class="@error('id_category') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($categories as $category)
                            <option selected value="{{ $category->id }}">{{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_category')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="discount"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount</label>
                    <input type="text" name="discount" id="discount" value="{{ old('discount') }}"
                        class="@error('discount') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rp ...">
                    @error('discount')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Product
                        Image</label>
                    <img id="img-preview" class="mb-2 w-1/2 -z-50 object-cover">
                    <input onchange="previewImage()"
                        class="@error('image')
                        border-red-700 border
                         @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        aria-describedby="file_input_help" id="image" name="image" type="file">
                    <p class="mt-1 text-sm  text-gray-900 dark:text-white" id="file_input_help">PNG, JPG or JPEG (MAX.
                        15mb).</p>
                    @error('image')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="rating"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                    <select id="rating" name="rating" value="{{ old('rating') }}"
                        class="@error('rating') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>1
                        </option>
                        <option>2
                        </option>
                        <option>3
                        </option>
                        <option>4
                        </option>
                        <option>5
                        </option>
                    </select>
                    @error('rating')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" rows="8" value="{{ old('discount') }}" name="description"
                        class="@error('discount') border-red-700 border @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Your description here"></textarea>
                    @error('description')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Add product
            </button>
        </form>
    </div>
@endsection

<script>
    function previewImage() {
        const image = document.querySelector("#image");
        const imgPreview = document.querySelector("#img-preview");

        // Menampilkan preview hanya jika file telah dipilih
        if (image.files && image.files[0]) {
            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }
    }
</script>
