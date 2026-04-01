<x-layout>
    <x-slot:heading>
        Edit Expense
    </x-slot:heading>
    
    <div>
        <div  class="flex justify-center ">
            <form action="/expenses/{{$expense->id}}" method="POST" class="w-full max-w-xl border shadow-md rounded-lg mt-10 p-6">
                @csrf
                @method('PATCH')
                <div class="mt-6  space-y-4">
                    <x-form-label for="amount" >Amount <br>
                        <x-form-input 
                            type="number"  
                            name="amount" 
                            value="{{$expense->amount}}"/>
                        <div class="text-sm text-red-500">
                            <x-form-error name="amount"/>
                        </div>
                    </x-form-label> <br>
                    <x-form-label for="description" >Description <br>
                        <x-form-input 
                            type="text" 
                            name="description" 
                            value="{{$expense->description}}"/>
                        <div class="text-sm text-red-500">
                            <x-form-error name="description"/>
                        </div>
                    </x-form-label> <br>
                    <x-form-label for="date" >Date <br>
                        <x-form-input 
                            type="date" 
                            name="date" 
                            value="{{$expense->date}}"/>
                        <div class="text-sm text-red-500">
                            <x-form-error name="date"/>
                        </div>
                    </x-form-label>
                </div>

                <div class="flex justify-between items-center mt-4">
                    <div class="">
                        <button class="p-2 hover:opacity-75 text-red-500" form="delete-form" onclick="return confirm('Delete this Expense?')">Delete</button>
                    </div>
                    <div>
                        <a href="/expenses/{{$expense->id}}" class="p-2 px-4 hover:opacity-75">cancel</a>
                        <x-form-button >Edit</x-form-button>
                    </div>
                </div>

            </form>

            <form action="/expenses/{{$expense->id}}" method="POST" id="delete-form"  style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>

</x-layout>