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

            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select id="category" name="category" required>
                    <option selected disabled value=""> Selecione a categotia </option>
                    <option>Valor qualqer </option>
                </select>
            </div>

            <div class="inputArea">
                <label for="descri">
                    Descrição da tarefa
                </label>
                <textarea id="descri" name="descripition" placeholder="Digite uma descrição para sua tarefa"></textarea>
            </div>

            <div class="inputArea">
                <button type="submit" class="btn btn-primary">Criar tarefa </button>
            </div>

        </form>
    </section>

</x-layout>
