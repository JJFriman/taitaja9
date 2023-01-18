<a href="/joukkueet">Takaisin</a>
<form method="POST" action="{{url('store-form')}}">
    @csrf
        <label
            for="joukkueNimi"
            >Joukkueen Nimi</label>
        <input
            type="text"
            name="joukkueNimi"
            placeholder="Taitajat"/>
            @error('joukkueNimi')
                <p>Pakollinen/Uniikki</p>
            @enderror

        <label for="jäsenet"
            >Jäsenet</label>
        <textarea
            type="text"
            name="jäsenet"
            placeholder="Tom, Jonas, Gerald"
        ></textarea>
            @error('jäsenet')
                <p>Pakollinen</p>
            @enderror
        <button>
            Lisää Joukkue
        </button>
</form>