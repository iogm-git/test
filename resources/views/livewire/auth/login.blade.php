<div class="bg-gray-50 rounded-md p-8 grid gap-4 place-items-center border border-gray-300 ">
    <p class="text-2xl font-bold">Login</p>
    <hr class="w-full">
    @if (session()->has('message'))
        @php
            $message = session('message');
        @endphp
        @include('components.common.modal.alert', [
            'content' => "<div class='bg-green-700 text-green-50 px-4 py-2 rounded-full text-sm font-bold'>$message</div>",
        ])
    @endif

    @if (session()->has('error'))
        <div class="w-full h-8 flex items-center justify-center text-sm bg-red-600 text-red-50 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent='login' class="grid auto-rows-auto gap-4">
        @include('components.common.form.input-text', [
            'name' => 'email',
            'type' => 'email',
            'error' => $errors->has('email') ? $errors->first('email') : '',
        ])
        @include('components.common.form.input-text', [
            'name' => 'password',
            'type' => 'password',
            'error' => $errors->has('password') ? $errors->first('password') : '',
        ])

        <hr class="w-full">
        @include('components.common.form.button', [
            'name' => 'Login',
            'type' => 'submit',
        ])
    </form>
    <hr class="w-full">
    <div class="text-sm">Don't have an account? <a href="{{ route('register') }}"
            class="text-blue-600 font-semibold hover:underline">Go
            Register</a>
    </div>
</div>
