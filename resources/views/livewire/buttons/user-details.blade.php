<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1>First Name is {{ $firstName }} and last name is {{ $lastName }}</h1>
{{--    <x-input wire:model.debounce.1000ms="firstName" class="mb-8 " type="text"/>--}}
    <x-input wire:model.lazy="firstName" class="mb-8 " type="text" class="border-2 border-rose-500"/>
{{--    <x-input wire:model="lastName" class="mb-8 " type="text"/>--}}

    <form wire:submit.prevent="onSubmit">
{{--        //defer to update only after submit button is clicked--}}
        <select wire:model.defer="selectedLastName" id="selectedLastName">
            <option value="kinyanjui">kinyanjui</option>
            <option value="kawangware">kawangware</option>
            <option value="langata">langata</option>
            <option value="rongai">rongai</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</div>
