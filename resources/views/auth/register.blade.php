<x-layout>

    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    
        <x-forms.input required label="Name" name="name" />
        <x-forms.input required label="Email" name="email" />

        <x-forms.input required label="Password" name="password" type="password" />
        <x-forms.input required label="Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input required label="Employer Name" name="employer" />
        <x-forms.input required label="Employer Logo" name="logo" type="file" />

        <x-forms.button>Create Account</x-forms.button>

    </x-forms.form>

</x-layout>