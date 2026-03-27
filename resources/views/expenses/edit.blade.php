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
                    <label for="amount" class="block mb-4">Amount <br>
                        <input 
                            type="number"  
                            name="amount" 
                            class="border  rounded-md w-full p-2 bg-gray-100"
                            value="{{$expense->amount}}">
                        <div class="text-sm text-red-500">
                            @error('amount')
                                {{$message}}
                            @enderror
                        </div>
                    </label> <br>
                    <label for="description" class="block mb-4">Description <br>
                        <input 
                            type="text" 
                            name="description" 
                            class="border rounded-md w-full p-2 bg-gray-100" 
                            value="{{$expense->description}}">
                        <div class="text-sm text-red-500">
                            @error('description')
                                {{$message}}
                            @enderror
                        </div>
                    </label> <br>
                    <label for="date" class="block mb-4">Date <br>
                        <input 
                            type="date" 
                            name="date" 
                            class="border rounded-md w-full p-2 bg-gray-100" 
                            value="{{$expense->date}}">
                        <div class="text-sm text-red-500">
                            @error('date')
                                {{$message}}
                            @enderror
                        </div>
                    </label>
                </div>

                <div class="flex justify-between items-center mt-8">
                    <div class="">
                        <button class="p-2 hover:opacity-75 text-red-500" form="delete-form" onclick="return confirm('Delete this Expense?')">Delete</button>
                    </div>
                    <div>
                        <a href="/expenses/{{$expense->id}}" class="p-2 px-4 hover:opacity-75">cancel</a>
                        <button class="px-4 py-2 bg-blue-500 rounded text-white hover:bg-blue-600 transition">Edit</button>
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