<div>
    <div class=" shadow bg-white p-5 mb-5">
        <p class="tet-xl font-bold text-center mb-4">Agega un nuevo comentario</p>
        @if (session('mensaje'))
            <div class="bg-green-500 p-2 rounded-lg mb-6 text-white  uppercase font-bold">
                {{ session('mensaje') }}
            </div>
        @endif

        <form
        wire:submit.prevent="submitForm" 
        >
            @csrf
            <div class="mb-5" >
                <label for="comentario" class="mb-2 block uppercase text-gray-500 font-bold">
                    Comentario
                </label>
                <textarea id="comentario" placeholder="Agrega un comentario" wire:model="comentario"
                    class="border p-3 w-full rounded-lg @error('comentario') border-red-500 @enderror"></textarea>

                @error('comentario')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <button type="submit" 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Crear comentario <button />
        </form>
    </div>
</div>
