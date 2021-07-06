<form action="/reminder" method="POST">
     @csrf 
     <div>
        <label for="title">Title : </label>
        <input type="text" name="title">
     </div>
     <div>
        <label for="date">Date : </label>
        <input type="date" name="date">
     </div>
     <div>
        <label for="time">Time : </label>
        <input type="time" name="time">
     </div>
     <div>
        <label for="important">Reminder Important:</label>
        <select name="important" id="important">
                <option value="true">ture</option>
                <option value="false">false</option>
        </select>
     </div>
     <button type="submit">Save</button>
</form>