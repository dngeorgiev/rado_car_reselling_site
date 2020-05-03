<form action="" id="online-evaluation-form">
    @csrf
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="name" class="custom-input">Вашият град *</label>
            <input type="text" id="name" name="name" />
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="phone" class="custom-input">Телефон за връзка *</label>
            <input type="tel" id="phone" name="phone" />
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" />
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="make" class="custom-input">Марка</label>
            <input type="text" id="make" name="make" />
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="model" class="custom-input">Модел</label>
            <input type="text" id="model" name="model" />
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="body_style">Купе</label>
            <select id="body_style">
                <option value="1">Седан</option>
                <option value="2">Хечбек</option>
                <option value="3">Комби</option>
                <option value="4">Купе</option>
                <option value="5">Кабрио</option>
                <option value="6">Джип</option>
                <option value="7">Пикап</option>
                <option value="8">Ван</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="engine">Двигател</label>
            <input type="text" id="engine" name="engine" />
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="transmission" class="custom-input">Скорости</label>
            <input type="text" id="transmission" name="transmission" />
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <label for="price" class="custom-input">Желана цена</label>
            <input type="text" id="price" name="price" />
        </div>
        <div class="col-12">
            <label for="additional_info" class="fl-label">Допълнения и коментари</label>
            <textarea id="additional_info" name="additional_info" spellcheck="false"></textarea>
        </div>
    </div>

    <div class="btn-holder">
        <button class="btn primary-btn"> Изпрати съобщение</button>
    </div>
</form>
