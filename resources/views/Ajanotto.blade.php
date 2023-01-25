<body>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form method="POST" action="{{url('store-time')}}">
        @csrf
            <label
                for="joukkue"
                >Joukkue</label>
            <select
                type="text"
                name="joukkue">
                <option selected></option>
                @foreach($joukkueet as $joukkue)
                <option value="{{$joukkue->joukkueNimi}}">{{$joukkue->joukkueNimi}}</option>
                @endforeach
                @error('joukkue')
                    <p>Pakollinen</p>
                @enderror</select>
    
            <label
                for="tehtävä"
                >Tehtävä</label>
            <select
                type="text"
                name="tehtävä">
                <option selected></option>
                @foreach($tehtävät as $tehtävä)
                <option value="{{$tehtävä->tehtäväNimi}}">{{$tehtävä->tehtäväNimi}}</option>
                @endforeach
                @error('tehtävä')
                    <p>Pakollinen</p>
                @enderror</select>

                <label for="aika"
                >Aika</label>
            <input
                type="text"
                name="aika"
                placeholder=""/>
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
    var currentTime;
    var mama = "00:00:00";

    function stopwatch() {
        milliseconds++;
        if(milliseconds == 100) {
            milliseconds = 0;
            seconds++;
            if(seconds == 60){
                seconds = 0;
                minutes ++;
            }
        }

        let ms = milliseconds < 10 ? "0" + milliseconds : milliseconds;
        let s = seconds < 10 ? "0" + seconds : seconds;
        let m = minutes < 10 ? "0" + minutes : minutes;

        let currentTime = m +":"+ s +":"+ ms;

        displayTime.innerHTML = currentTime;

        
    }

    function startWatch() {
        if (timer!== null)
        {
            clearInterval(timer);
        }
        timer = setInterval(stopwatch, 10);
    }

    function watchStop(currentTime) {
        clearInterval(timer);
        let url = '/showTime'
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        //console.log(currentTime);
        fetch(url, {
        "method": "POST",
        headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
        "body": JSON.stringify(mama)
    }).then(function(response){
        return response.json();
    }).then(function(data){
        console.log(data);
    })
    }

    function watchReset(){
        clearInterval(timer);
        [milliseconds, seconds, minutes] = [0,0,0];
        displayTime.innerHTML = "00:00:00";
    }
    
</script>
</body>