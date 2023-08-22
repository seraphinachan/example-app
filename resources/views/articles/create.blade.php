<html>
    <head>
        @vite(['resources/css/app.css'.'resources/js/app.js'])
    </head>
    <body>
        <div class="container p-5">
        <h1 class="text-2xl">글쓰기</h1>
        <form action="/articles" method="POST" class="mt-3">
            @csrf
            <input type="text" class="block w-full mb-2 rounded">
            <input type="hidden" name="body" value="<?php echo csrf_token() ?>">
            <button class="py-1 px-3 bg-black text-white rounded text-xs">저장하기</button>
        </form>
        </div>
    </body>    
</html>