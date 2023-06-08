<div class="flex justify-center bg-pink-400">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <button type="button" wire:click="$refresh" class="mr-2 text-lg rounded-md px-6 py-2 font-bold text-white uppercase">Refresh</button>

    <button type="button" wire:click="$emit('connected')"
{{--    <button type="button" wire:click="$set('name', 'Doe')"--}}
{{--    <button type="button" wire:click="connect('John', 'Doe')"--}}
{{--    <button type="button" wire:keydown.caps-lock="connect"--}}
{{--    <button type="button" wire:keydown.control="connect"--}}
    class="text-lg rounded-md px-6 py-2 font-bold text-white uppercase ">
       Connect       {{--   {{ $name }}--}}
    </button>
</div>
