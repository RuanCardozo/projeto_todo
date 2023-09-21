<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar tarefa </h1>
        <form>

            <x-form.text_input name="title" label="Titulo da tarefa" placeholder="Digite o titulo da sua tarefa" />

            <x-form.text_input type="date" name="due_date" label="Data da realização" placeholde="data de realização" />

            <x-form.select_input name="category" label="Categoria">
                <option>Valor qualqer </option>
            </x-form.select_input>

            <x-form.textarea_input name="description" placeholder="Digite a descrição da tarefa"/>


            <div class="inputArea">
                <button type="submit" class="btn btn-primary">Criar tarefa </button>
            </div>

        </form>
    </section>

</x-layout>
