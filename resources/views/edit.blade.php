@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" action="{{ route('post.update', $item->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input value="{{ old('category_id') ?? $item->category_id }}" name="category_id" type="text"
                            class="form-control bg-white" id="floatingInput" placeholder="Masukkan kategory">
                        <label for="floatingInput">Kategory</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ old('title') ?? $item->title }}" name="title" type="text"
                            class="form-control bg-white" id="floatingInput" placeholder="Masukkan Judul">
                        <label for="floatingInput">Judul Postingan</label>
                    </div>
                    <div class="form-floating mb-3">

                        <textarea name="description" class="form-control bg-white" type="text" placeholder="Tambahkan text anda"
                            id="floatingTextarea2" style="height: 100px">{!! old('description') ?? $item->description !!}</textarea>
                        <label for="floatingTextarea2">Deskripsi</label>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 text-right">
                            <button type="submit"
                                class=" shadow-lg bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Update Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
