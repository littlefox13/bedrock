<div class="title">Задать вопрос на Фабрику Носков</div>

<form class="form">
  <div class="question-form question-form__container">
    <div class="form__single-col">
      <div class="form__double-col">
        <div class="form__single-col form__input-container">
          <input type="text" class="form__input" name="name">
          <label class="form__label">Фамилия Имя Отчество*</label>
        </div>

        <div class="form__double-row">
          <div class="form__double-col">
            <div class="form__single-col form__input-container">
              <input type="tel" class="form__input" name="phone">
              <label class="form__label">Мобильный телефон*</label>
            </div>
          </div>
          <div class="form__double-col">
            <div class="form__single-col form__input-container">
              <input type="email" class="form__input" name="email">
              <label class="form__label">Электронная почта*</label>
            </div>
          </div>
        </div>

        <div class="form__single-col form__input-container">
          <input type="text" class="form__input" name="birthday">
          <label class="form__label">Дата рождения*</label>
        </div>

      </div>
      <div class="form__double-col form__textarea">
        <div class="form__single-col form__input-container">
          <textarea type="text" class="form__input" name="additionally"></textarea>
          <label class="form__label">Любая дополнительная информация*</label>
        </div>
      </div>
    </div>

  </div>




  <div class="singlerow_privacy">
    <div class="form__privacy">
      Отправляя форму я соглашаюсь с <a class="form__privacy_link" href="/uslovija-peredachi-informacii">условиями
        передачи информации</a>
    </div>
    <input type="submit" class="submit submit_privacy" value="Задать вопрос">
  </div>
</form>
<div class="admin-ajax" style="display: none;"><?php echo admin_url('admin-ajax.php'); ?></div>
