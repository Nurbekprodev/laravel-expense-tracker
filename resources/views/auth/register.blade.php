<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    
    <div class="">
        <div class="flex justify-center ">
            <form action="/register" method="POST" class="w-full max-w-xl border shadow-md rounded-lg mt-10 p-6">
                @csrf
                
                <div class="mt-6  space-y-4">
                    <x-form-label for="name" >Name <br>
                        <x-form-input type="text" placeholder="Joe" name="name" :value="old('name')" />
                        <div class="text-sm text-red-500">
                            <x-form-error name="name" />
                        </div>
                    </x-form-label> 
                    <x-form-label for="email" >Email <br>
                        <x-form-input type="text" name="email" placeholder="user@example.com"  :value="old('email')"/>
                        <div class="text-sm text-red-500">
                            <x-form-error name="email" />
                        </div>
                    </x-form-label> 
                    <x-form-label for="password" >Password <br>
                        <x-form-input type="password" name="password" />
                        <div class="text-sm text-red-500">
                            <x-form-error name="password" />
                        </div>
                    </x-form-label> 
                    <x-form-label for="password_confirmation" >Confirm Password <br>
                        <x-form-input type="password" name="password_confirmation"  />
                        <div class="text-sm text-red-500">
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-label>                    
                </div>
                
                <div class="container flex justify-end gap-3 mt-4">
                    <a href="/expenses" class="p-2 hover:opacity-75">cancel</a>
                    <x-form-button>Register</x-form-button>
                </div>
            </form>


        </div>
    </div>

</x-layout>