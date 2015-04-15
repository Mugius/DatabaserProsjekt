<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Person ID</th>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Telefon Nummer</th>
            <th>Epost</th>
            <th>Adresse</th>
            <th>Post Nummer</th>
        </tr>
    </thead>
    <tbody>
        {foreach $person as $person}
            <tr>
                <td>{$person.personID}</td>
                <td>{$person.fornavn}</td>
                <td>{$person.etternavn}</td>
                <td>{$person.tlfnummer}</td>
                <td>{$person.epost}</td>
                <td>{$person.adresse}</td>
                <td>{$person.postnr}</td>             
            </tr>
        {/foreach}
    </tbody>
</table>
