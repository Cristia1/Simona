<!DOCTYPE html>
<html >
<head>
</head>
    <body>
        <h2>Pugin</h2>
        <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
        <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
            Name: <input type="text" name="name" value="">
            <br> <br>
            E-mail: <input type="text" name="email" value="">
            <br> <br>
            Passwort: <input type="text" name="passwort" value="">
            <input type="submit" name="submit" value="submit">
       </form>
    </body>
</html>
