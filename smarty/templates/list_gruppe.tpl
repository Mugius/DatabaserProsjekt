<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Gruppe ID</th>
            <th>Gruppe Navn</th>

        </tr>
    </thead>
    <tbody>
        {foreach $gruppe as $gruppe}
            <tr>
                <td>{$gruppe.gruppeID}</td>
                <td>{$gruppe.gruppenavn}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
<a href="index.php?action=add_gruppe_person">Legg til Personer inn i en gruppe</a>
