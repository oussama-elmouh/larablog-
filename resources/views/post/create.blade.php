<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer un post') }}
        </h2>
    </x-slot>

 


<!-- component -->
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
    @foreach ($errors->all() as $error)
    <span class="block text-red-500">{{ $error }}</span>
    @endforeach
    
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="mt-10">
    @csrf

    <x-input-label for="title" value="Titre du post" />
    <x-text-input id="title" name="title"/>

    <x-input-label for="content" value="Contenu du post" />
    <textarea id="content" name="content" ></textarea>

    <x-input-label for="image" value="Image du post" />
    <x-text-input id="image" name="image" type="file"/>
    
    <x-input-label for="category" value="Categorie du post" />
    <select name="category" id="category">
        @foreach ($categories as $category )
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            
        @endforeach
    </select>

    <x-primary-button style="display:block !important;" class="mt-5">Créer mon post</x-primary-button>
    
    
    
    
</form>
 
 
</div>
</x-app-layout>   