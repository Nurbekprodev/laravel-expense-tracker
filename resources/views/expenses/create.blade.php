<x-layout>
    <x-slot:heading>
        Create Expense
    </x-slot:heading>
    
    <div class="">
        <div class="flex justify-center ">
            <form action="/expenses" method="POST" class="w-full max-w-xl border shadow-md rounded-lg mt-10 p-6">
                @csrf
                
                <div class="mt-6  space-y-4">
                    <label for="amount" class="block mb-4">Amount <br>
                        <input type="number" placeholder="1000" name="amount" class="border rounded-md w-full p-2 bg-gray-100">
                        <div class="text-sm text-red-500">
                            @error('amount')
                                {{$message}}
                            @enderror
                        </div>
                    </label> <br>
                    <label for="description" class="block mb-4">Description <br>
                        <input type="text" name="description" placeholder="Transport..." class="border rounded-md w-full p-2 bg-gray-100" >
                        <div class="text-sm text-red-500">
                            @error('description')
                                {{$message}}
                            @enderror
                        </div>
                    </label> <br>
                    <label for="date" class="block mb-4">Date <br>
                        <input type="date" name="date" placeholder="2026-03-10" class="border rounded-md w-full p-2 bg-gray-100" >
                        <div class="text-sm text-red-500">
                            @error('date')
                                {{$message}}
                            @enderror
                        </div>
                    </label>
                </div>
                
                <div class="container flex justify-end gap-3 mt-8">
                    <a href="/expenses" class="p-2 hover:opacity-75">cancel</a>
                    <button class="px-4 py-2 bg-blue-500 rounded text-white hover:bg-blue-600 transition">Save</button>
                </div>
            </form>


        </div>
    </div>

</x-layout>