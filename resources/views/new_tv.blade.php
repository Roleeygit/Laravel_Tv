<a href="/tvdata"><button>Adatok</button></a>
<a href="/tvfive"><button>Adatok5</button></a>

@if(session()->has("sucess"))
    <h3>{{ session("success") }}</h3>
@endif

<form action="submit-tv" method="post">
    @csrf
    <p>
        <label for="">Név:</label>
        <input type="text" name="name" placeholder="name">
    </p>
    <p>
        <label for="">Meret:</label>
        <input type="text" name="size" placeholder="size">
    </p>
    <p>
        <label for="">Tipus:</label>
        <input type="text" name="type" placeholder="type">
    </p>
    
    <p>
    <button type="submit">Submit</button>
    </p>


    
</form>