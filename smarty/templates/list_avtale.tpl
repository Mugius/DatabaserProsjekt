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
        {foreach $avtale as $avta}
            <tr>
                <td>{$avta.a_avtaleID}</td>
                <td>{$avta.a_tidspunkt}</td>
                <td>{$avta.a_avtaleType}</td>
                <td>{$avta.a_kommentar}</td>
                <td>{$avta.a_stedID}</td>

            </tr>
        {/foreach}
    </tbody>
</table>
<a href="index.php?action=add_avtale_person">Legg til <b>Personer</b> til en Avtale</a></br>
<a href="index.php?action=add_avtale_gruppe">Legg til <b>Grupper</b> til en Avtale</a></br></br>

<a href="index.php?action=add_avtale">Legg til ny Avtale!</a>

