    <style>
        .content {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <x-layout :showHeader="false" :showFooter="false" :showSideNav="false">
        <div class="container" style="border: 1px solid black; padding: 10px 20px; height: fit-content; width: fit-content; border-radius: 9px;">
            <h1 style="text-align:center">Login</h1>
            <form action="" style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 7px;">
                <label for="email">email</label>
                <input type="text" name="email" id="">
                <label for="password">password</label>
                <input type="password" name="password" id="">
                <button type="submit">login</button>
            </form>
        </div>
    </x-layout>