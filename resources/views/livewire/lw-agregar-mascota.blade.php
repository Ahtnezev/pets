{{-- Formulario para agregar una nueva mascota --}}
<div class="flex items-center justify-center py-5 bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow-lg">
        <form wire:submit='addMascota'>
            <!-- Nombre -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="name" name="name" type="text" wire:model='name'
                    class="w-full px-3 py-2 mt-1 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('name')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input id="description" name="description" type="text" wire:model='description'
                    class="w-full px-3 py-2 mt-1 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('description')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
            </div>

            <!-- Type -->
            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" class="w-full" id="type" wire:model='type'>
                    <option value="" selected disabled hidden>Seleccionar</option>
                    <option value="Car">Car</option>
                    <option value="Dog">Dog</option>
                    <option value="Turtle">Turtle</option>
                </select>
                @error('type')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <!-- birthday -->
            <div class="mb-4">
                <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                <input id="birthday" name="birthday" type="date" wire:model='birthday'
                    class="w-full px-3 py-2 mt-1 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('birthday')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
            </div>

            <!-- Botón de Envío -->
        </form>
        <div class="mt-5">
            <button type="submit"
                wire:click="addMascota"
                class="w-full px-4 py-2 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Agregar
            </button>
        </div>
    </div>
</div>
