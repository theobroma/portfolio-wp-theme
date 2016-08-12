var gulp = require('gulp'),
    watch = require('gulp-watch'),
    rimraf = require('rimraf'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    sourcemaps = require('gulp-sourcemaps'),
    runSequence = require('run-sequence'),
    dirSync = require('gulp-directory-sync'),
    //CSS
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    //JS
    browserify = require('browserify'),
    source = require('vinyl-source-stream'),
    babelify = require('babelify'),
    //Server
    browserSync = require('browser-sync'),
    // plugins for build
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    csso = require('gulp-csso');

//Конфиг
var paths = {
  src: '../src/',
  dist: '../'
}

//Компиляция SASS
gulp.task('sass', function () {
   return gulp.src([paths.src + 'sass/**/*.{sass,scss}', '!' + paths.src + 'sass/**/_*.{sass,scss}'])
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.dist + '/css/'))
    .pipe(browserSync.reload({stream: true}))
    .pipe(notify("SASS Compiled"));
});

//Browserify
gulp.task('browserify', function() {
    return browserify({
        entries: ['../src/javascript/app.js'],
        extensions: ['.js'],
        paths: ['./node_modules/','../src/javascript/']
    })
        .transform(babelify)
        .bundle()
        // Передаем имя файла, который получим на выходе, vinyl-source-stream
        .pipe(source('bundle.js'))
        .pipe(gulp.dest(paths.dist + 'js/'))
        .pipe(notify("JavaScript bundled!"));
});

//Перезагрузка страницы
gulp.task("browser-sync", function() {
        browserSync.init({
            proxy: "http://localhost/PortfolioWP/"
        });
    });
/*
# ===============================================
# Синхронизация
# ===============================================
*/
gulp.task('fontsSync', function () {
    return gulp.src('')
        .pipe(plumber())
        .pipe(dirSync(paths.src + 'fonts/', paths.dist + 'fonts/', {printSummary: true}))
        .pipe(browserSync.stream());
});
/*
# ===============================================
# Создание билда проэкта
# ===============================================
*/

//minify images
gulp.task('imgBuild', function () {
    return gulp.src(paths.dist + 'img/**/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.src(paths.dist + 'img/'))
});

/*
# ===============================================
# Отслеживание изменения файлов
# ===============================================
*/

gulp.task('watch', function() {
    gulp.watch(paths.src + '/sass/**/*.{sass,scss}', ['sass']);
    gulp.watch(paths.src + '/javascript/**/*.js', ['browserify']);
    gulp.watch(paths.src + 'fonts/**/*', ['fontsSync']);
});

/*
# ===============================================
# Группы тасков
# ===============================================
*/
gulp.task('compile', ['sass','browserify']);
gulp.task('default', ['compile','fontsSync','browser-sync','watch']);
