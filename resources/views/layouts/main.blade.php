<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#301B28',
                        secondary: '#523634',
                        accent: '#B6452C',
                        light: '#DDC5A2',
                        darkLight: '#e89316'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('../favicon.png') }}">

</head>
<body class="bg-gray-50">
<div class="min-h-screen">
    <nav class="bg-dark text-light shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center h-16">
                <a href="{{ route('product.index') }}" class="text-xl font-bold">Products</a>
                <div>
                    <a href="{{ route('product.create') }}"
                       class="inline-flex items-center px-4 py-2 hover:bg-opacity-90 text-darkLight rounded-lg transition-colors duration-200 ms-5 mt-1">
                        Add Product
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

</div>

</body>
<footer class="bg-dark text-light shadow-lg py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        Test assignment from EBS Integrator company
    </div>
</footer>

</html>
