<body>
    <form method="POST" action="{{url('store-time')}}">
        @csrf
            <label
                for="joukkue"
                >Joukkue</label>
            <select
                type="text"
                name="joukkue">
                <option selected>Joukkue</option>
                @foreach($joukkueet as $joukkue)
                <option value="{{$joukkue->joukkueNimi}}">{{$joukkue->joukkueNimi}}</option>
                @endforeach
                @error('joukkue')
                    <p>Pakollinen/Uniikki</p>
                @enderror</select>
    
            <label
                for="tehtävä"
                >Tehtävä</label>
            <select
                type="text"
                name="tehtävä">
                <option selected>Tehtävä</option>
                @foreach($tehtävät as $tehtävä)
                <option value="{{$tehtävä->tehtäväNimi}}">{{$tehtävä->tehtäväNimi}}</option>
                @endforeach
                @error('tehtävä')
                    <p>Pakollinen/Uniikki</p>
                @enderror</select>

                <label for="aika"
                >Aika</label>
            <input
                type="text"
                name="aika"
                placeholder="10:00:00"/>
                @error('aika')
                    <p>Pakollinen</p>
                @enderror
                
            <button>
                Aloita
            </button>
    </form>

    <a href="/">Takaisin</a>
    <br>
    <br>
    <select name="" id="">
        <option selected>Joukkue</option>
        @foreach($joukkueet as $joukkue)
        <option value="{{$joukkue->id}}">{{$joukkue->joukkueNimi}}</option>
        @endforeach
    </select>
    <select name="" id="">
        <option selected>Tehtävä</option>
        @foreach($tehtävät as $tehtävä)
        <option value="{{$tehtävä->id}}">{{$tehtävä->tehtäväNimi}}</option>
        @endforeach
    </select>
<h1>Aika</h1>
<div class="stopwatch">
    <h1 id="displayTime">00:00:00</h1>
    <div class="buttons">

        <button onclick="watchStop()">Stop</button>
        <button onclick="startWatch()">Start</button>
        <button onclick="watchReset()">Zero</button>
    </div>
</div>
</body>
<script>
    let [milliseconds, seconds, minutes] = [0,0,0]; 
    let displayTime = document.getElementById("displayTime");
    let timer = null;

    function stopwatch() {
        milliseconds++;
        if(milliseconds == 1000) {
            milliseconds = 0;
            seconds++;
            if(seconds == 60){
                seconds = 0;
                minutes ++;
            }
        }

        let s = seconds < 10 ? "0" + seconds : seconds;
        let m = minutes < 10 ? "0" + minutes : minutes;

        displayTime.innerHTML = m +":"+ s +":"+ milliseconds;
    }

    function startWatch() {
        if (timer!== null)
        {
            clearInterval(timer);
        }
        timer = setInterval(stopwatch, 1);
    }

    function watchStop(){
        clearInterval(timer);
    }

    function watchReset(){
        clearInterval(timer);
        let [milliseconds, seconds, minutes] = [0,0,0];
        displayTime.innerHTML = "00:00:00";
    }
</script>
</body>