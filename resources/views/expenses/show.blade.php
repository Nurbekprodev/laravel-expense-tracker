<x-layout>
    <x-slot:heading>
        Expense
    </x-slot:heading>
    
    <div class="expense-card">
        <p>
            <strong>Amount:</strong> {{$expense['amount']}} <br>
            <strong>Category:</strong> {{$expense->category->name}} <br>
            <strong>Description:</strong> {{$expense['description']}} <br>
            <strong>Date:</strong> {{$expense['date']}}
        </p>
    </div>
    <div style="padding-top: 15px; ">
        <x-button href="/expenses/{{$expense->id}}/edit">
            Edit Expense
        </x-button>
    </div>
</x-layout>