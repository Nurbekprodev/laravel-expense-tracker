<x-layout>
    <x-slot:heading>
        Create Expense
    </x-slot:heading>
    
    <div class="container">
        <div class="expense-form">
            <form action="/expenses" method="POST">
                @csrf
                
                <div>
                    <label for="amount">Amount <br>
                        <input type="number" placeholder="1000" name="amount" required>
                    </label> <br>
                    <label for="description">Description <br>
                        <input type="text" name="description" placeholder="Transport..." required>
                    </label> <br>
                    <label for="date">Date <br>
                        <input type="date" name="date" placeholder="2026-03-10" required>
                    </label>
                </div>

                <div>
                    <a href="/expenses" class="cancel-btn">cancel</a>
                    <button type="submit" class="btn">Save</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>