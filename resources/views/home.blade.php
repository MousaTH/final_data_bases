<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creating posts</title>
</head>
<body>
<div class="new_product">
    <h2>create product</h2>
    <form action="{{route('home.store')}}" method="POST">
        @csrf
        <label for="fname">Product title:</label><br>
        <input type="text" id="name_of_product" name="name_of_product" required><br>
        <label for="lname">Description:</label><br>
        <textarea rows="8" cols="30" id="description_of_product" name="description_of_product"></textarea><br>
        <label>select category</label><br>
        <select id="categories_id"name="categories_id" required>
        <option selected value="">select category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
        </select><br>
        <button type="submit" value="Submit">submit</button>
    </form>
</div>

</body>
</html>
