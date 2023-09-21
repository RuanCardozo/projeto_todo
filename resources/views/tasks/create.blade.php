<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar tarefa </h1>
        <form>
            <div class="inputArea">
                <label for="title">
                    Titulo da task
                </label>
                <input id="title" name="title" placeholder="Digite o titulo da tarefa" required />
            </div>

            <div class="inputArea">
                <label for="due_date">
                    Data da realização
                </label>
                <input type="date" id="due_date" name="due_date" placeholder="Data de realização" required />
            </div>

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

        </form>
    </section>

</x-layout>
