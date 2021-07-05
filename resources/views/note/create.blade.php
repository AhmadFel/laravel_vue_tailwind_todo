<form action="/note" method="POST">
     @csrf 
     <div>
         <label for="content">Write Your Content</label>
         <textarea name="content"></textarea>
     </div>
     <button type="submit">Save</button>
</form>