<x-layout>
    <x-slot:heading>
        Create Expense
    </x-slot:heading>
    
    <div class="">
        <div class="flex justify-center ">
            <form action="/expenses" method="POST" class="w-full max-w-xl border shadow-md rounded-lg mt-10 p-6">
                @csrf
                
                <div class="mt-6  space-y-4">
                    <x-form-label for="amount" >Amount <br>
                        <x-form-input type="number" placeholder="1000" name="amount" />
                        <div class="text-sm text-red-500">
                            <x-form-error name="amount" />
                        </div>
                    </x-form-label> <br>
                    <x-form-label for="description" >Description <br>
                        <x-form-input type="text" name="description" placeholder="Transport..." />
                        <div class="text-sm text-red-500">
                            <x-form-error name="description" />
                        </div>
                    </x-form-label> <br>
                    <x-form-label for="date" >Date <br>
                        <x-form-input type="date" name="date" placeholder="2026-03-10" />
                        <div class="text-sm text-red-500">
                            <x-form-error name="date" />
                        </div>
                    </x-form-label>
                </div>
                
                <div class="container flex justify-end gap-3 mt-4">
                    <a href="/expenses" class="p-2 hover:opacity-75">cancel</a>
                    <x-form-button>Save</x-form-button>
                </div>
            </form>


        </div>
    </div>

</x-layout>