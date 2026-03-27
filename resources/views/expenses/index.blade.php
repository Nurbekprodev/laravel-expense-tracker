<x-layout>
    <x-slot:heading>
        Expenses Page
    </x-slot:heading>

  
    <div  class="max-w-4xl mx-auto mt-6 bg-white shodow-md rounded-lg border overflow-hidden">
             <table class="w-full text-sm text-left">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">Amount</th>
                        <th class="px-6 py-3">Category</th>
                        <th class="px-6 py-3">Description</th>
                        <th class="px-6 py-3">Date</th>
                    </tr>
                </thead>

                <tbody class="divide-y">
                    @foreach ($expenses as $expense)
                        <tr class="hover:bg-gray-50 transition">

                             <td class="px-6 py-4">
                                <a href="/expenses/{{$expense->id}}" class="text-blue-500 hover:underline">
                                    {{$expense['amount']}}
                                </a>
                            </td>                 
                             <td class="px-6 py-4">{{$expense->category->name}}</td>
                             <td class="px-6 py-4">{{$expense['description']}}</td>
                             <td class="px-6 py-4">{{$expense['date']}}</td>
                         </tr>
                     @endforeach
                </tbody>

            </table>
    </div>

   
    <div class="mt-6 flex justify-center">
        <div class="px-4 py-2">
            {{$expenses->links()}}
        </div>
    </div>
</x-layout>