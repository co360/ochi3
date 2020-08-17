// Определяем переменную "preprocessor"
let preprocessor = 'scss'; // Выбор препроцессора в проекте - sass 
// Определяем константы Gulp
const { src, dest, parallel, series, watch } = require('gulp');
// Подключаем Browsersync
const browserSync = require('browser-sync').create();
// Подключаем gulp-concat
const concat = require('gulp-concat');
// Подключаем модули gulp-sass
const scss = require('gulp-sass');

// Определяем логику работы Browsersync
function browsersync() {
	browserSync.init({ // Инициализация Browsersync
		proxy: 'ochi3',
		// server: { baseDir: '/' }, // Указываем папку сервера
		notify: false, // Отключаем уведомления
		online: true // Режим работы: true или false
	})
}

function styles() {
    return src('catalog/view/theme/ochi3/stylesheet/' + preprocessor + '/main.' + preprocessor + '') // Выбираем источник: "app/sass/main.sass" или "app/less/main.less"
    .pipe(eval(preprocessor)()) // Преобразуем значение переменной "preprocessor" в функцию
    .pipe(concat('stylesheet.css')) // Конкатенируем в файл app.min.js
    .pipe(dest('catalog/view/theme/ochi3/stylesheet/')) // Выгрузим результат в папку "app/css/"
    .pipe(browserSync.stream()) // Сделаем инъекцию в браузер
}
function startwatch() {
	 
    // Мониторим файлы препроцессора на изменения
        watch('catalog/view/theme/ochi3/stylesheet/**/' + preprocessor + '/**/*', styles);
        
    // Мониторим файлы HTML на изменения
		// watch('app/**/*.html').on('change', browserSync.reload);        
 
}

// Экспортируем функцию browsersync() как таск browsersync. Значение после знака = это имеющаяся функция.
exports.browsersync = browsersync;

// Экспортируем функцию styles() в таск styles
exports.styles = styles;

// Экспортируем дефолтный таск с нужным набором функций
exports.default = parallel(styles, browsersync, startwatch);