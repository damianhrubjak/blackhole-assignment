<fieldset class="flex items-center">
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}-input"
        class="peer h-4 w-4 border border-pallette-gray-300">
    <label for="{{ $name }}-input"
        class="ml-2 block font-medium text-pallette-gray-300 transition duration-300 peer-checked:text-pallette-blue-600">
        {{ $label }}
    </label>
</fieldset>
