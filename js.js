var Users = {}; // Объект для хранения зарегистрированных пользователей

function handleLogin(event) {
    event.preventDefault(); // Предотвращаем обновление страницы

    var user = document.getElementById('login_credential_form').value;
    var password = document.getElementById('login_password_form').value;

    Auth.login(user, password);
}



var Auth = {
    login: function(user, password) {
        // Проверяем, зарегистрирован ли пользователь
        if (Users[user] && Users[user] === password) {
            console.log('Успешный вход с пользователем ' + user);
            localStorage.setItem('currentUser', user); // Сохраняем текущего пользователя
        } else {
            console.log('Ошибка входа. Пользователь не зарегистрирован или неверный пароль.');
        }
    },
    register: function(user, password) {
        // Регистрируем нового пользователя/
        if (!Users[user]) {
            Users[user] = password;
            console.log('Пользователь ' + user + ' успешно зарегистрирован.');
        } else {
            console.log('Пользователь ' + user + ' уже зарегистрирован.');
        }
    }
};

