<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se </h1>
        <form method="POST" action="{{route('user.register_action')}}">

            <x-form.text_input
                name="name"
                label="Seu nome"
                placeholder="Seu nome"
            />

            <x-form.text_input
                type="email"
                name="email"
                label="Seu email"
                placeholde="Seu email"
            />

            <x-form.text_input
                type="password"
                name="password"
                label="Sua senha"
                placeholde="Sua senha"
            />

            <x-form.form_button
                resetTxt="Limpar"
                submitTxt="Registrar-se"
            />

        </form>
    </section>

</x-layout>
