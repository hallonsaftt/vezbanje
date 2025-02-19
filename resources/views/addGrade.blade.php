<form action="/add-user-grade" method="post">

    @csrf

    <input required type="text" name="profesor" placeholder="Unesi ime profesora"><br><br>

    <input required type="text" name="predmet" placeholder="Ime predmeta"><br><br>

    <input required type="number" name="ocena" placeholder="Ocena"><br><br>

    <button>Unesi ocenu</button>

</form>
