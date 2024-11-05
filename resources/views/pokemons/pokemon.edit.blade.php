<form action="{{ url('pokemons'.$pokemon->id) }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="tipo" placeholder="tipo" required>
    <textarea name="pontos-de-poder" placeholder="pontos_de_poder" required></textarea>
    <button type="submit">atualizar pokemon</button>
        <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit">Delete</button>
        </form>
</form>