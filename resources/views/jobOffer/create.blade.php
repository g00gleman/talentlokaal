<form action="{{ route('dashboard.jobOffer.store') }}" method="post">
    @csrf
    <input type="text" name="function" id="" placeholder="Voeg vacaturenaam toe">
    <input type="submit" value="Opslaan">
</form>
