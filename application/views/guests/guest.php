<h2>Guest <span>Response</span></h2>

<form action="/guest/respond" method="post">
    <table class="blue_table">
        <tr>
            <th>{group_name}</th>
            {responses}
            <th>{description}</th>
            {/responses}
        </tr>
        {guests}
        <tr>
            <td>{first_name} {last_name}</td>
            {responses}
            <td>
                <input type="radio" name="{name}" value="{value}"{checked}>
            </td>
            {/responses}
        </tr>
        {/guests}
    </table>
    
    <div>
        <label for="notes">Notes:</label><br>
        <textarea name="notes" value="notes" rows="4" cols="40">{notes}</textarea>
    </div>
    <input type="submit" value="Submit">    
</form>


