var gulp = require('gulp');
var sass = require ('gulp-sass');
var browserSync = require('browser-sync').create();

// Compile scss into css
function style() {
    // 1. Where is my css file
    return gulp.src('./scss/theme.scss')
        // 2. Pass that file through sass compiler
        .pipe(sass())
        // 3. where do I save the compiled CSS?
        .pipe(gulp.dest('./css'))
        // 4. Stream changes to all browser
        .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        server: {
            baseDir: './app'
        }
    });
    gulp.watch('./scss/**/*.scss', style);
    gulp.watch('./app/**/*.html').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;