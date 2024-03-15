<div class="bg-gray-50 rounded-md p-8 grid gap-4 place-items-center border border-gray-300 ">
    <p class="text-2xl font-bold">Register</p>

    <hr class="w-full">

    <form wire:submit.prevent="register" class="grid auto-rows-auto gap-4">
        @include('components.common.form.input-text', [
            'name' => 'nama',
            'type' => 'text',
            'error' => $errors->has('nama') ? $errors->first('nama') : '',
        ])
        @include('components.common.form.input-text', [
            'name' => 'email',
            'type' => 'text',
            'error' => $errors->has('email') ? $errors->first('email') : '',
        ])
        @include('components.common.form.input-text', [
            'name' => 'password',
            'type' => 'password',
            'error' => $errors->has('password') ? $errors->first('password') : '',
        ])
        @include('components.common.form.input-text', [
            'name' => 'password_confirmation',
            'type' => 'password',
            'error' => $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '',
        ])
        <hr class="w-full">
        @include('components.common.form.button', [
            'name' => 'Register',
            'type' => 'submit',
        ])
    </form>

    <hr class="w-full">

    <div class="text-sm">Do you already have an account? <a href="{{ route('login') }}"
            class="text-blue-600 font-semibold hover:underline">Go Login</a></div>
</div>
