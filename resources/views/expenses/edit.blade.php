<x-layout>
    <x-slot:heading>
        Edit Expense
    </x-slot:heading>
    
    <div class="container">
        <div class="expense-form">
            <form action="/expenses/{{$expense->id}}" method="POST">
                @csrf
                @method('PATCH')

                <div>
                    <label for="amount">Amount <br>
                        <input 
                        type="number" 
                        placeholder="1000" 
                        name="amount" 
                        value="{{$expense->amount}}"
                        required>
                    </label> <br>
                    <label for="description">Description <br>
                        <input 
                        type="text" 
                        name="description" 
                        placeholder="Transport..." 
                        value="{{$expense->description}}"
                        required>
                    </label> <br>
                    <label for="date">Date <br>
                        <input 
                        type="date" 
                        name="date" 
                        placeholder="2026-03-10"
                        value="{{$expense->date}}" 
                        required>
                    </label>
                </div>
                <div class="btn-container">
                    <div class="btn-div">
                        <button class="delete-btn" form="delete-form">Delete</button>
                    </div>
                    <div>
                        <a href="/expenses/{{$expense->id}}" class="cancel-btn">cancel</a>
                        <button type="submit" class="btn">Edit</button>
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