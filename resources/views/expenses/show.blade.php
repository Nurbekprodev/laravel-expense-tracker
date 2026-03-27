<x-layout>
    <x-slot:heading>
        Expense
    </x-slot:heading>
    
    <div class="flex justify-center">
        
        <div class="p-6 border rounded-xl shadow-md mt-10 max-w-md w-full bg-white">
            <div class="text-lg font-semibold mb-4">Expense Details</div>
            <div class="pb-6 space-y-2 text-gray-700">
                <p><span class="font-semibold">Amount:</span> {{$expense->amount}}</p>
                <p><span class="font-semibold">Category:</span> {{$expense->category?->name}}</p>
                <p><span class="font-semibold">Description:</span> {{$expense->description}}</p>
                <p><span class="font-semibold">Date:</span> {{$expense->date}}</p>
            </div>

            <div class="flex justify-end">
                <a href="/expenses/{{$expense->id}}/edit" class="px-4 py-2 bg-blue-500 rounded text-white hover:bg-blue-600 transition">
                    Edit Expense
                </a>
            </div>

        </div>
    </div>
</x-layout>