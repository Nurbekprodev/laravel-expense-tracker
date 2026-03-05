<x-layout>
    <x-slot:heading>
        Expense
    </x-slot:heading>
    
    <div class="expense-card">
        <p>
            <strong>Amount:</strong> {{$expense['amount']}} <br>
            <strong>Category:</strong> {{$expense['category']}} <br>
            <strong>Description:</strong> {{$expense['description']}} <br>
            <strong>Date:</strong> {{$expense['date']}}
        </p>
    </div>

</x-layout>