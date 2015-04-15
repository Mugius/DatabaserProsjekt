<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Student number</th>
            <th>Email</th>
            <th>Unix username</th>
            <th>Codecademy username</th>
            <th>Github username</th>            
        </tr>
    </thead>
    <tbody>
        {foreach $students as $stud}
            <tr>
                <td>{$stud.name}</td>
                <td>{$stud.student_no}</td>
                <td>{$stud.email}</td>
                <td>{$stud.user_unix}</td>
                <td>{$stud.user_codecademy}</td>
                <td>{$stud.user_github}</td>            
            </tr>
        {/foreach}
    </tbody>
</table>