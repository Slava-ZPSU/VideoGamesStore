<div class="container">
    <h1 class="mt-4 mb-3">Відновлення паролю</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <form action="/account/recovery" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <label for="email">E-mail:</label>
                        <input id="email" type="email" class="form-control" name="email"/>
                        <p class="help-block"></p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Відновити пароль</button>
            </form>
        </div>
    </div>
</div>