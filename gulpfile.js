// Main gulp taskrunner
var gulp = require('gulp');
// Prevents gulp crashing on errors
var plumber = require('gulp-plumber');
// scss compiler
var sass = require('gulp-sass');
// Minification
var cssnano = require('gulp-cssnano');
// Auto prefix of css attributes
var autoprefixer = require('gulp-autoprefixer');
// Concatenation of files
var concat = require('gulp-concat');
// Javascript minify
var uglify = require('gulp-uglify');
// Renameing of compiled/minified files
var rename = require('gulp-rename');

gulp.task('compile-scss', function () {
	gulp.src('assets/scss/*.scss')
	.pipe(plumber())
	.pipe(sass())
	.pipe(autoprefixer('last 10 versions'))
	.pipe(gulp.dest('assets/css_files'));
});

gulp.task('concat-css', function () {
	gulp.src('assets/css_files/*.css')
	.pipe(plumber())
	.pipe(cssnano())
	.pipe(concat('style.min.css'))
	.pipe(gulp.dest('assets/css'));
});

gulp.task('combine-js-and-concat', function () {
	gulp.src('assets/js_files/*.js')
	.pipe(plumber())
	.pipe(concat('main.js'))
	.pipe(uglify())
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('assets/js'));
});

gulp.task('watch', function(){
	gulp.watch('assets/scss/*.scss', ['compile-scss']);
	gulp.watch('assets/css_files/*.css', ['concat-css']);
	gulp.watch('assets/js_files/*.js', ['combine-js-and-concat']);
});

gulp.task('default', ['compile-scss', 'concat-css', 'combine-js-and-concat', 'watch']);