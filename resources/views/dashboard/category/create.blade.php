@extends('dashboard.components.layout')

@section('dashboard_content')
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Category</h2>
        <form action="/admin/dashboard/category" method="POST" class="mx-auto md:ml-4 mb-0 mt-8 max-w-2xl space-y-4">
            @csrf
            <div>
                <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    Name</label>
                <input type="text" name="category_name" id="category_name" value="{{ old('category_name') }}"
                    class="@error('category_name') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Type product name" required>
                @error('category_name')
                    <div class="absolute text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between ">
                <button type="submit"
                    class="inline-block rounded-lg bg-blue-500 px-5  py-3 text-sm font-medium text-white">
                    Create Category
                </button>
            </div>
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
