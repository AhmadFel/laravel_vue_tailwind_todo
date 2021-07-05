<form action="/note" method="POST">
     @csrf 
     <div>
         <label for="content">Write Your Content</label>
         <input type="text" name="content">
     </div>
     <button type="submit">Save</button>
</form>