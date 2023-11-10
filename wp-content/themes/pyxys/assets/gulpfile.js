'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('node-sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
const rename = require('gulp-rename');

/**
 * Here we set a prefix for our compiled and stylesheet and scripts.
 * Note that this should be the same as the `$themeHandlePrefix` in `func-script.php` and `func-style.php`.
 */
const themePrefix = 'pyxys';

/**
 * Paths and files
 */
const srcScss = 'scss/**/*.scss';
const destCss = 'css';


gulp.task('css', () => {
    return gulp.src(srcScss)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({ cascade : false }))
        .pipe(rename(`${themePrefix}.min.css`))
        .pipe(cleancss())
        .pipe(gulp.dest(destCss));
});


gulp.task('watch', () => {
    gulp.watch(srcScss, gulp.series('css'));
});

/**
 * Default task
 */
gulp.task('default', gulp.series('css') );