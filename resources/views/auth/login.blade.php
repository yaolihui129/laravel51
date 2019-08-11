<?php
/**
 * Created by PhpStorm.
 * User: yaolh
 * Date: 2019/8/11
 * Time: 10:55
 */

<form method="POST" action="/auth/login">
{!! csrf_field() !!}

<div>
    Email
    <input type="email" name="email" value="{{ old('email') }}">
</div>

<div>
    密码
    <input type="password" name="password" id="password">
</div>

<div>
    <input type="checkbox" name="remember"> 记住我
</div>

<div>
    <button type="submit">登录</button>
</div>
</form>