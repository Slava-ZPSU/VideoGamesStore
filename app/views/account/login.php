<div class="container">
    <h1 class="mt-4 mb-3">Вхід</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <form action="/account/login" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <label for="login">Логін:</label>
                        <input id="login" type="text" class="form-control" name="login"/>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label for="password">Пароль</label>
                        <input id="password" type="password" class="form-control" name="password"/>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <input id="remember-me" type="checkbox" name="rememberMe"/>
                        <label for="remember-me">Запам'ятати мене</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Вхід</button>
                <a class="btn btn-secondary" href="/account/recovery">Забули пароль?</a>
            </form>
        </div>
    </div>
</div>