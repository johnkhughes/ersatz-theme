<form action="<?= home_url('/') ?>" method="get">
    <div>
        <label for="search-term">Search</label>
        <input type="search" name="s" id="search-term" value="<?= get_search_query() ?>">
    </div>

    <div>
        <button type="submit">Search</button>
    </div>
</form>
