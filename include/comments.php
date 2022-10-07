<div class="col-md-12 col-lg-8 main-content">
    <form id="form" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="name">Имя пользователя</label>
                <input type="text" name="name" class="form-control ">
            </div>
            <div class="col-md-4 form-group">
                <label for="photo">Фото пользователя</label>
                <input type="file" accept=".jpg,.jpeg,.png" name="photo" class="form-control ">
            </div>
            <div class="col-md-4 form-group">
                <label for="city">Город пользователя</label>
                <input type="text" name="city" class="form-control ">
            </div>
            <div class="col-md-4 form-group">
                <label for="link">Ссылка</label>
                <input type="text" name="link" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="message">Текст комментария</label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <input type="submit" value="Добавить комментарий" id="btn" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

<script>
    form.onsubmit = async (e) => {
        e.preventDefault();

        let response = await fetch('/ajax/comments.php', {
            method: 'POST',
            body: new FormData(form)
        });

    };
</script>
