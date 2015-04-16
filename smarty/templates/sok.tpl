
<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>AvtaleID</th>
            <th>Tidspunkt</th>
            <th>Avtale Type</th>
            <th>Kommentar</th>
            <th>Sted ID</th>

        </tr>
    </thead>
    <tbody>
        {foreach $avtale as $sok}
            <tr>
                <td>{$sok.a_avtaleID}</td>
                <td>{$sok.a_tidspunkt}</td>
                <td>{$sok.a_avtaleType}</td>
                <td>{$sok.a_kommentar}</td>
                <td>{$sok.a_stedID}</td>

            </tr>
        {/foreach}
    </tbody>
</table>

<a href="index.php">Back to main page</a>
