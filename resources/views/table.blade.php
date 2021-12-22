{{--@dd($categories)--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<button class="btn btn-primary my-5 mx-5 px-5" style="margin-left: 1050px !important; margin-bottom: -100px !important;"><a href="{{route('products.create')}}" style="color: white;">add</a></button>
<table class="table w-50 m-5">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Category Name</th>
        <th scope="col" style="text-align:center;">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php $i=0; ?>
    @foreach($categories as $category )

{{--        @dd($category )--}}
    <tr>

        @foreach($category->products as $product )
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->product_name}}</td>
            <td>{{$category->category_name}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{ route('products.destroy',$product->id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </td>
    </tr>
        @endforeach




    @endforeach
    </tbody>
</table>
</body>
</html>
