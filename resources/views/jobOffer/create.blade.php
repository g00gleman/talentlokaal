<form action="{{ route('dashboard.jobOffer.store') }}" method="post">
    @csrf
    <input type="text" name="function" id="" placeholder="Voeg vacaturenaam toe">
    <select name="jobCategoryId" id="">
        @foreach($jobCategories as $jobCategory)
            <option value="{{ $jobCategory->id }}">{{ $jobCategory->categoryName }}</option>
        @endforeach
    </select>
    <input type="submit" value="Opslaan">
</form>
