<x-layout>
    <x-slot:heading>
        Expenses Page
    </x-slot:heading>

    <div  class="expenses-table">
         <table>
            <thead>
                <tr>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                    <tr>
                          
                         <td>
                            <a href="/expenses/{{$expense['id']}}">
                                {{$expense['amount']}}
                            </a>
                        </td>                 
                         <td>{{$expense['category']}}</td>
                         <td>{{$expense['description']}}</td>
                         <td>{{$expense['date']}}</td>
                     </tr>
                 @endforeach
            </tbody>

        </table>
    </div>
   
</x-layout>