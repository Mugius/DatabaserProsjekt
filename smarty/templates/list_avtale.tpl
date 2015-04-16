<form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="a_tidspunkt" class="col-sm-3 control-label">Sok Tidspunkt</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_tidspunkt" name="a_tidspunkt" placeholder="Skriv dato paa Avtalen du har lyst aa finne" value="{$a_tidspunkt}">
        </div>
    </div>
    <input type="hidden" name="action" value="list_avtale" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Search dato</button>
</form>
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

