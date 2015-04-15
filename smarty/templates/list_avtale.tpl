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
        {foreach $avtale as $avtale}
            <tr>
                <td>{$avtale.avtaleID}</td>
                <td>{$avtale.tidspunkt}</td>
                <td>{$avtale.avtaleType}</td>
                <td>{$avtale.kommentar}</td>
                <td>{$avtale.stedID}</td>

            </tr>
        {/foreach}
    </tbody>
</table>
<a href="index.php?action=add_avtaler">Legg til Personer/Grupper til en Avtale</a>
