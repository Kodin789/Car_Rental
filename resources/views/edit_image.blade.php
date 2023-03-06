<x-app-layout>

<form action="{{ route('save_image') }}"method="POST" enctype="multipart/form-data">@csrf
    <input type="file" name="images">
    <button>save</button>
</form>

</x-app-layout>
